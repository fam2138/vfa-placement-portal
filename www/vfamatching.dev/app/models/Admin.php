<?php

class Admin extends BaseModel {
    protected $table = 'admins';

    protected function rules()
    {
        return array('phoneNumber'=> 'digits:10');
    }

    protected function adminRules()
    {
        return $this->rules();
    }

	protected $guarded = array();

	public function user()
    {
        return $this->belongsTo('User');
    }

    public function adminNotes()
    {
    	return $this->hasMany('AdminNote');
    }
}
