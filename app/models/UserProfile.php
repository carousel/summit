<?php

class UserProfile extends Eloquent{

	protected $table = 'users_profile';
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo("User");
    }

}
