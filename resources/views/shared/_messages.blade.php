<?php
/**
 * Created by PhpStorm.
 * User: 25380
 * Date: 2019/1/8 0008
 * Time: 下午 4:29
 */
@foreach (['danger','warning','success','info'] as $msg)
    @if(session()-has($msg))
        <div class="flash-message">
            <p class="alert alert-{{ $msg }}">
                {{ seeesion()->get($msg) }}
            </p>
        </div>
    @endif
@endforeach