<?php

class AdminController extends BaseController {


	public function loginForm()
	{
        return View::make('admin.loginForm');
	}

	public function login()
	{
        $input = Input::all();

        if(Auth::attempt(["username"=>$input["username"],"password"=> $input["password"]])){
            return Redirect::to("/admin-panel");
        };
        return Redirect::to("/")
            ->with("error_message","Molimo pokušajte ponovo.");
	}

    public function adminPanel()
    {
        //$user = User::find(1);
        //dd($user->created_at->diffForHumans());
        $username = User::where("username","paksummit")
            ->first();
        $old_members = OldMembers::all();
        $total = count($old_members);
        $last = DB::table("old_members")
            ->orderBy("id","DESC")
            ->first();


        return View::make("admin.adminPanel")
            ->with("total",$total)
            ->with("username",$username)
            ->with("last",$last);
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to("/")
            ->with("logout_message","Uspješno ste se odjavili");
    }

    public function populateForm()
    {
        $username = User::where("username","paksummit")
            ->first();

        return View::make("admin.populateForm")
            ->with("username",$username);
    }

    public function rules()
    {
        $rules = [
        
            "first_name" => "Required",
            "last_name" => "Required",
            "day_of_birth" => "Required",
            "month_of_birth" => "Required",
            "year_of_birth" => "Required",
            "place_of_birth" => "Required",
            "nationality" => "Required",
            "occupation" => "Required",
            "citizenship" => "Required",
            "identity_card_id" => "Required",
            "country" => "Required",
            "city" => "Required",
            "street_name" => "Required",
            "street_no" => "Required",
            "mobile_country_code" => "Required",
            "mobile_operator_no" => "Required",
            "mobile_no" => "Required",
            "email" => "Required|unique:old_members,email",
            "member_card_id" => "Required",
            "join_day" => "Required",
            "join_month" => "Required",
            "join_year" => "Required"
        
        ];
        return $rules;
    }
    public function populate()
    {
        $input = Input::all();
        $rules = $this->rules();
        $validator = Validator::make($input,$rules);
        if($validator->passes()){
            OldMembers::create($input);
            return Redirect::to("/old-members");
        }else{
            return Redirect::to("/populate-form")
                ->withErrors($validator);
        }

    }
    public function oldMembers()
    {
        $username = User::where("username","paksummit")
            ->first();
        $old_members = OldMembers::orderBy("member_card_id","asc")->get();

        return View::make("admin.oldMembers")
            ->with("username",$username)
            ->with("old_members",$old_members);
    }

    public function oldMembersShow($id)
    {
        Session::put("id",$id);
        $username = User::where("username","paksummit")
            ->first();

        $old_member = OldMembers::where("id",$id)->first();

        return View::make("admin.oldMembersShow")
            ->with("om",$old_member)
            ->with("username",$username);
    }

    function oldMembersEditForm()
    {
        $username = User::where("username","paksummit")
            ->first();

        $old_member = OldMembers::where("id",Session::get("id"))->first();

        return View::make("admin.oldMembersEditForm")
            ->with("om",$old_member)
            ->with("username",$username);
    }

    public function oldMembersEdit()
    {
        $input = Input::all();
        $id = Session::get("id");
        $old_member = OldMembers::where("id",$id)->first();

        $old_member->first_name = $input["first_name"];
        $old_member->last_name = $input["last_name"];
        $old_member->day_of_birth = $input["day_of_birth"];
        $old_member->month_of_birth = $input["month_of_birth"];
        $old_member->year_of_birth = $input["year_of_birth"];
        $old_member->place_of_birth = $input["place_of_birth"];
        $old_member->nationality = $input["nationality"];
        $old_member->occupation = $input["occupation"];
        $old_member->citizenship = $input["citizenship"];
        $old_member->identity_card_id = $input["identity_card_id"];
        $old_member->country = $input["country"];
        $old_member->city = $input["city"];
        $old_member->street_name = $input["street_name"];
        $old_member->street_no = $input["street_no"];
        $old_member->mobile_country_code = $input["mobile_country_code"];
        $old_member->mobile_operator_no = $input["mobile_operator_no"];
        $old_member->mobile_no = $input["mobile_no"];
        $old_member->landline_country_code = $input["landline_country_code"];
        $old_member->landline_city_no = $input["landline_city_no"];
        $old_member->landline_no = $input["landline_no"];

        $old_member->email = $input["email"];
        $old_member->member_card_id = $input["member_card_id"];

        $old_member->join_day = $input["join_day"];
        $old_member->join_month = $input["join_month"];
        $old_member->join_year = $input["join_year"];
        $old_member->notes = $input["notes"];


        $old_member->save($input);
        return Redirect::to("/old-members")
            ->with("edit_message","Uspješno ste izmjenili podatke za: $old_member->first_name $old_member->last_name");
    }
    public function oldMembersDelete()
    {
        $id = Session::get("id");
        $old_member = OldMembers::where("id",$id)->first();
        $old_member->delete();
        return Redirect::to("/old-members")
            ->with("delete_message","Uspješno ste izbrisali člana: $old_member->first_name $old_member->last_name");

    }
    public function membersSearch()
    {
        $input = Input::all();
        $results = OldMembers::where($input["filter"],$input["pojam"])->get();
        return View::make("admin.oldMembersSearch")
            ->with("results",$results)
            ->with("username",Auth::user())
            ->with("search");
    }
    public function truncate()
    {
        OldMembers::truncate();
        return Redirect::to("/admin-panel");
    }
} 
