<?php


    Route::get('/',"AdminController@loginForm");
    Route::post('login', "AdminController@login");
    Route::get('logout', "AdminController@logout");

    Route::group(["before" => "auth"],function(){

        Route::get('/admin-panel',"AdminController@adminPanel");
        Route::get('/populate-form',"AdminController@populateForm");
        Route::post('/populate',"AdminController@populate");
        Route::get('/old-members',"AdminController@oldMembers");
        Route::get('/old-members-show/{id}',"AdminController@oldMembersShow");
        Route::get('/old-members-edit-form',"AdminController@oldMembersEditForm");
        Route::post('/old-members-edit',"AdminController@oldMembersEdit");
        Route::post('/old-members-delete',"AdminController@oldMembersDelete");
        Route::post("/old-members-search","AdminController@oldMembersSearch");
        Route::post("/truncate","AdminController@truncate");
        Route::get("/users",function(){
            $users = User::all();
            foreach ($users as $user) {
                echo $user->username . " " . $user->password . "<br>";
            }
        });
        
        
    });


    

    
    
    
    
    
    

    
