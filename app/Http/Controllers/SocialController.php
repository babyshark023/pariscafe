public function redirect('facebook')
{
return Socialite::driver('facebook')->redirect();
}

public function callback('facebook')
{
$user = Socialite::driver('facebook')->user();

}

public function redirect('instagram')
{
return Socialite::driver('instagram')->redirect();
}

public function callback('instagram')
{
$user = Socialite::driver('instagram')->user();

}

public function redirect('twitter')
{
return Socialite::driver('twitter')->redirect();
}

public function callback('twitter')
{
$user = Socialite::driver('twitter')->user();

}

public function redirect('pinterest')
{
return Socialite::driver('pinterest')->redirect();
}

public function callback('pinterest')
{
$user = Socialite::driver('pinterest')->user();

}
