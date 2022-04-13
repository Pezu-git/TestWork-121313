<?php

namespace App\Http\Middleware;
use App\Models\User;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AuthenticateApi extends Middleware
{
    protected function authenticate($request, array $guards)
    {
       
        //Даем пользователю возможность передать токен (api-ключ) разными способами
        //1. в адресе запроса
        $token = $request->query('token');
        return 'fdfdsfsdf';
        if(empty($token)){
            //2. Через url-form-encoded поля POST запроса
            $token = $request->input('token');
        }
        if(empty($token)){
            //3. Через заголовок Authorization: Bearer ......
            $token = $request->bearerToken();
        }

        //Сравниваем токен с тем, что хранится в наших настройках. Здесь можно заменить логику на свою. Например сделать поиск токена в базе
        $user = User::where('remember_token', $token)->first();
        if($user) {
            return $user;
        }
            
        //В случае неуспеха, вызываем метод сообщающий о статусе "Неавторизован"
        $this->unauthenticated($request, $guards);
    }
}
