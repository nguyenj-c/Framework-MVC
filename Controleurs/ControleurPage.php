<?php

final class ControleurPage
{
    public function defautAction() : void
    {
        Vue::montrer('Form/login');
    }

    public function voidAction() : void
    {
        $O_temp = '';
        Vue::montrer('Page/voir', array('void' =>  $O_temp));
    }
}
