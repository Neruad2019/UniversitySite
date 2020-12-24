<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Contact;
use App\Models\Assessment;
use App\Models\Group;
use App\Models\Human;
use App\Models\Role;
use App\Models\Subject;

class HomeController extends Controller
{

  public function AddContact(Request $contact){
    $valid=$contact->validate([
      'email'=>'required',
      'name'=>'required',
      'surname'=>'required',
      'phone_number'=>'required',
      'message'=>'required',
    ]);

    $NContact=new Contact();
    $NContact->email=$contact->input('email');
    $NContact->name=$contact->input('name');
    $NContact->surname=$contact->input('surname');
    $NContact->phone_number=$contact->input('phone_number');
    $NContact->message=$contact->input('message');

    $NContact->save();

    return redirect()->route('contact');
  }
  public function DeleteContact(Request $req){

    $Cont=Contact::find($req->input('message_id'));
    $Cont->delete();
    return view('adminpanel_messages', ['Messages' => Contact::all()]);
  }


  public function Register(Request $user){
//https://99181-282044-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/05/icon-user-default.png
  $valid=$user->validate([
    'email'=>'required',
    'name'=>'required',
    'surname'=>'required',
    'password'=>'required',
    'repassword'=>'required',
  ]);

  if(DB::table('humans')->where('email', $user->input('email'))->get()->isEmpty() && $user->input('password')==$user->input('repassword')){
    $NewUser=new Human();
    $NewUser->email=$user->input('email');
    $NewUser->name=$user->input('name');
    $NewUser->surname=$user->input('surname');
    $NewUser->password=$user->input('password');
    $NewUser->role_id=1;
    $NewUser->picture_url="https://99181-282044-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/05/icon-user-default.png";

    $NewUser->save();

    return redirect()->route('registration')->with('success','Registration Done Successfully!');
  }
  return redirect()->route('registration');
  }

  // ----------------------------------------------------------------------------------------------------------------------------
  // ----------------------------------------------------------------------------------------------------------------------------

  public function Login(Request $user){
    // dd($Subject->humans()->where('role_id',1)->get());




    $valid=$user->validate([
      'email'=>'required',
      'password'=>'required'
    ]);
    $UserVerify=DB::table('humans')->where('email', $user->input('email'))->first();
    // dd($UserVerify);
    if($UserVerify!=null && $UserVerify->password==$user->input('password')){
      if($UserVerify->role_id==3){
          return view('adminpanel_users', ['Users' => Human::all()]);
      }
      return view('profile', ['User' => $UserVerify]);
    }
    return redirect()->route('login');
  }

  public function ProfileEdit(Request $req){
    $User=Human::find($req->input('user_id'));
    return view('editprofile', ['User' => $User]);
  }
  public function ProfileEdit1(Request $user){
    $valid=$user->validate([
      'email'=>'required',
      'name'=>'required',
      'surname'=>'required'
    ]);
    $EditUser=Human::find($user->input('user_id'));
    $EditUser->email=$user->input('email');
    $EditUser->name=$user->input('name');
    $EditUser->surname=$user->input('surname');

    $EditUser->save();

    if($user->byadmin==1){
      $User=Human::find($user->input('user_id'));
      $Roles=Role::all();
      $Groups=Group::all();
      return view('adminpanel_users_details', ['User' => $User,'Roles'=>$Roles,'Groups'=>$Groups]);
    }

    return view('editprofile', ['User' => $EditUser,'success'=>'Change Successfully!']);
  }

  public function ProfileEdit2(Request $user){
    $valid=$user->validate([
      'picture_url'=>'required'
    ]);
    $EditUser=Human::find($user->input('user_id'));
    $EditUser->picture_url=$user->input('picture_url');

    $EditUser->save();

    return view('editprofile', ['User' => $EditUser]);
  }

  public function ProfileEdit3(Request $user){
    $valid=$user->validate([
      'password'=>'required',
      'new_password'=>'required',
      're_new_password'=>'required'
    ]);
    $EditUser=Human::find($user->input('user_id'));

    if($EditUser->password==$user->input('password') && $user->input('new_password')==$user->input('re_new_password')){
      $EditUser->password=$user->input('new_password');
      $EditUser->save();
      return view('editprofile', ['User' => $EditUser]);
    }
    return view('editprofile', ['User' => $EditUser]);
  }


  public function UserDetails(Request $req){
    $User=Human::find($req->input('user_id'));
    $Roles=Role::all();
    $Groups=Group::all();
    return view('adminpanel_users_details', ['User' => $User,'Roles'=>$Roles,'Groups'=>$Groups]);
  }


  public function UserPassword(Request $req){
    $User=Human::find($req->input('user_id'));
    $User->password=$req->new_password;
    $User->save();
    $Roles=Role::all();
    $Groups=Group::all();
    return view('adminpanel_users_details', ['User' => $User,'Roles'=>$Roles,'Groups'=>$Groups]);
  }
  public function UserEditRole(Request $req){
    $User=Human::find($req->input('user_id'));
    $User->role_id=$req->role_id;

    foreach ($User->subjects as $subject) {
      $deletedRows = Assessment::where('subject_id', $subject->id)->where('human_id', $User->id)->delete();
    }
    $User->subjects()->detach();
    $User->group_id=null;
    $User->save();
    $Roles=Role::all();
    $Groups=Group::all();
    return view('adminpanel_users_details', ['User' => $User,'Roles'=>$Roles,'Groups'=>$Groups]);
  }
  public function UserGroupByAdmin(Request $req){
    $User=Human::find($req->input('user_id'));

    foreach ($User->subjects as $subject) {
      $deletedRows = Assessment::where('subject_id', $subject->id)->where('human_id', $User->id)->delete();
    }
    $User->subjects()->detach();

    if($req->group_id==-1){
      $User->group_id=null;
    }
    else{
      $Group=Group::find($req->input('group_id'));
      foreach ($Group->humans as $student) {
        if($student->subjects->isNotEmpty()){
          $User->subjects()->attach($student->subjects);
          foreach ($student->subjects as $subject) {
            $Assessment=new Assessment();
            $Assessment->human_id=$User->id;
            $Assessment->subject_id=$subject->id;
            $Assessment->save();
          }
          break;
        }
      }
      $User->group_id=$req->input('group_id');
    }


    $User->save();
    $Roles=Role::all();
    $Groups=Group::all();
    return view('adminpanel_users_details', ['User' => $User,'Roles'=>$Roles,'Groups'=>$Groups]);
  }
  public function ToUsers(){
    return view('adminpanel_users', ['Users' => Human::all()]);
  }
  public function ToContacts(){
    return view('adminpanel_messages', ['Messages' => Contact::all()]);
  }
  public function ToGroups(){
    return view('adminpanel_groups', ['Groups' => Group::all()]);
  }
  public function AddGroup(Request $group){
  $NewGroup=new Group();
  $NewGroup->cafedre_name=" ";
  $NewGroup->group_name=$group->input('group_name');
  $NewGroup->save();

  return view('adminpanel_groups', ['Groups' => Group::all()]);
  }
  public function DeleteGroup(Request $group){
  $Group=Group::find($group->input('group_id'));
  if($Group->humans->isNotEmpty()){
    foreach ($Group->humans() as $student) {
      $student->subjects()->detach();
    }
  }
  $Group->delete();

  return view('adminpanel_groups', ['Groups' => Group::all()]);
  }

  public function ToGroupDetails(Request $req){
    $Group=Group::find($req->input('group_id'));
    if($Group->humans->isNotEmpty()){
      $Student=$Group->humans[0];
    }
    else{
      $Student=null;
    }

    return view('adminpanel_groups_details', ['Group' => $Group,'Student'=>$Student,'Subjects'=>Subject::all()]);
  }

  public function EditGroupName(Request $req){
    $Group=Group::find($req->input('group_id'));
    $Group->group_name=$req->group_name;
    $Group->save();
    if($Group->humans->isNotEmpty()){
      $Student=$Group->humans[0];
    }
    else{
      $Student=null;
    }
    return view('adminpanel_groups_details', ['Group' => $Group,'Student'=>$Student,'Subjects'=>Subject::all()]);
  }
  public function RejectSubject(Request $req){
    $Group=Group::find($req->input('group_id'));
    $Subject=Subject::find($req->input('subject_id'));
    if($Group->humans->isNotEmpty()){
      foreach ($Group->humans as $student) {
        $student->subjects()->detach($Subject);
        $deletedRows = Assessment::where('subject_id', $req->input('subject_id'))->where('human_id', $student->id)->delete();
      }
      $Student=$Group->humans[0];
    }
    else{
      $Student=null;
    }

    return view('adminpanel_groups_details', ['Group' => $Group,'Student'=>$Student,'Subjects'=>Subject::all()]);
  }
  public function AssignSubject(Request $req){
    $Group=Group::find($req->input('group_id'));
    $Subject=Subject::find($req->input('subject_id'));
    if($Group->humans->isNotEmpty()){
      foreach ($Group->humans as $student) {
        $student->subjects()->attach($Subject);
        $Assessment=new Assessment();
        $Assessment->human_id=$student->id;
        $Assessment->subject_id=$req->input('subject_id');
        $Assessment->save();
      }
      $Student=$Group->humans[0];
    }
    else{
      $Student=null;
    }

    return view('adminpanel_groups_details', ['Group' => $Group,'Student'=>$Student,'Subjects'=>Subject::all()]);
  }


  public function ToSubjects(Request $req){
    return view('adminpanel_subjects',['Subjects'=>Subject::all()]);
  }
  public function AddSubject(Request $subject){
  $NewSubject=new Subject();
  $NewSubject->name=$subject->input('name');
  $NewSubject->credit_amount=$subject->input('credit_amount');
  $NewSubject->save();

  return view('adminpanel_subjects',['Subjects'=>Subject::all()]);
  }

  public function ToSubjectDetails(Request $req){
    $Subject=Subject::find($req->input('subject_id'));

    $SubjectTeachers=$Subject->humans()->where('role_id',2)->get();

    $Teachers=Human::where('role_id',2)->get();

    return view('adminpanel_subjects_details', ['Subject' => $Subject,'SubjectTeachers'=>$SubjectTeachers,'Teachers'=>$Teachers]);
  }
  public function EditSubject(Request $req){
    $Subject=Subject::find($req->input('subject_id'));
    $Subject->name=$req->name;
    $Subject->credit_amount=$req->credit_amount;
    $Subject->save();

    $SubjectTeachers=$Subject->humans()->where('role_id',2)->get();

    $Teachers=Human::where('role_id',2)->get();
    return view('adminpanel_subjects_details', ['Subject' => $Subject,'SubjectTeachers'=>$SubjectTeachers,'Teachers'=>$Teachers]);
  }
  public function RejectTeacher(Request $req){
    $Teacher=Human::find($req->input('teacher_id'));
    $Subject=Subject::find($req->input('subject_id'));

    $Teacher->subjects()->detach($Subject);

    $SubjectTeachers=$Subject->humans()->where('role_id',2)->get();

    $Teachers=Human::where('role_id',2)->get();
    return view('adminpanel_subjects_details', ['Subject' => $Subject,'SubjectTeachers'=>$SubjectTeachers,'Teachers'=>$Teachers]);
  }
  public function AssignTeacher(Request $req){
    $Teacher=Human::find($req->input('teacher_id'));
    $Subject=Subject::find($req->input('subject_id'));

    $Teacher->subjects()->attach($Subject);

    $SubjectTeachers=$Subject->humans()->where('role_id',2)->get();

    $Teachers=Human::where('role_id',2)->get();
    return view('adminpanel_subjects_details', ['Subject' => $Subject,'SubjectTeachers'=>$SubjectTeachers,'Teachers'=>$Teachers]);
  }
  public function DeleteSubject(Request $req){
  $Subject=Subject::find($req->input('subject_id'));
  if($Subject->humans->isNotEmpty()){
    $Subject->humans()->detach();
    $deletedRows = Assessment::where('subject_id', $req->input('subject_id'))->delete();
  }
  $Subject->delete();

  return view('adminpanel_subjects',['Subjects'=>Subject::all()]);
  }

  public function TeacherSubjects(Request $req){
    $Teacher=Human::find($req->input('teacher_id'));
    $Subjects=$Teacher->subjects;


    return view('teacherpanel_subjects',['Subjects'=>$Subjects,'User'=>$Teacher]);
  }

  public function TeacherGroups(Request $req){
    $Teacher=Human::find($req->input('teacher_id'));
    $Subject=Subject::find($req->input('subject_id'));
    $Groups=collect([]);
    $Students=$Subject->humans->where('role_id',1);
    foreach ($Students as $student) {
      if(!$Groups->contains(Group::find($student->group_id))){
        $Groups->push(Group::find($student->group_id));
      }
    }
    return view('teacherpanel_groups',['Subject'=>$Subject,'User'=>$Teacher,'Groups'=>$Groups]);
  }

  public function TeacherStudents(Request $req){
    $Teacher=Human::find($req->input('teacher_id'));
    $Subject=Subject::find($req->input('subject_id'));
    $Group=Group::find($req->input('group_id'));

    $Assessments=collect([]);
    $Students=$Group->humans->where('role_id',1);
    foreach ($Students as $student) {
      $Assessments->push(Assessment::where('subject_id', $req->input('subject_id'))->where('human_id',$student->id)->first());
    }
    // dd($Assessments);
    return view('teacherpanel_students',['Subject'=>$Subject,'User'=>$Teacher,'Group'=>$Group,'Students'=>$Students,
  'Assessments'=>$Assessments]);
  }

  public function StudentGrades(Request $req){

    $Student=Human::find($req->input('student_id'));
    $Subjects=$Student->subjects;
    $Assessments=collect([]);
    foreach ($Subjects as $subject) {
      $Assessments->push(Assessment::where('subject_id', $subject->id)->where('human_id',$req->input('student_id'))->first());
    }

    return view('studentpanel_grades',['User'=>$Student,'Assessments'=>$Assessments,'Subjects'=>$Subjects]);
  }

  public function TeacherGradeStudents(Request $req){
    $Teacher=Human::find($req->input('teacher_id'));
    $Subject=Subject::find($req->input('subject_id'));
    $Student=Human::find($req->input('student_id'));
    $Group=Group::find($req->input('group_id'));


    $Assessment=Assessment::where('subject_id', $req->input('subject_id'))->where('human_id',$req->input('student_id'))->first();
    $Assessment->midterm=$req->input('midterm');
    $Assessment->endterm=$req->input('endterm');
    $Assessment->final_exam=$req->input('final_exam');

    $Assessment->final_grade=0.6 * (0.5 * ($req->input('midterm') + $req->input('endterm'))) + 0.4 * $req->input('final_exam');
    $Assessment->save();

    $Assessments=collect([]);
    $Students=$Group->humans->where('role_id',1);
    foreach ($Students as $student) {
      $Assessments->push(Assessment::where('subject_id', $req->input('subject_id'))->where('human_id',$student->id)->first());
    }
    // dd($Assessments);
    return view('teacherpanel_students',['Subject'=>$Subject,'User'=>$Teacher,'Group'=>$Group,'Students'=>$Students,
  'Assessments'=>$Assessments]);
  }

  public function ScheduleMonday(Request $req){
      $UserVerify=Human::find($req->input('student_id'));
      return view('schedule_monday', ['User' => $UserVerify]);
  }


  public function ScheduleTuesday(Request $req){
      $UserVerify=Human::find($req->input('student_id'));
      return view('schedule_tuesday', ['User' => $UserVerify]);
  }
  public function ScheduleFriday(Request $req){
      $UserVerify=Human::find($req->input('student_id'));
      return view('schedule_friday', ['User' => $UserVerify]);
  }


}
