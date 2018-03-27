<?php

function route_class()
{
    return explode('.', Route::currentRouteName())[0] ;
}