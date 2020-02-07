<ul id="mainnav-menu" class="list-group"> 
    @php
    //echo "<pre>"; print_r($menus); echo "</pre>";   
    @endphp
    @foreach ($menus as $sistemas) 
        <li class="list-header"><i class="fa {{ $sistemas['icono'] }}"></i> &nbsp; <strong>{{ $sistemas['nom_sistema'] }}</strong></li>
        @foreach ($sistemas[$sistemas['sistema_id']] as $modulos) 

        <!--Menu list item-->
        <li class="active-sub">
            <a href="#">
                <i class="{{$modulos['icono']}}"></i>
                <span class="menu-title">{{$modulos['nom_modulo']}}</span>
                <i class="arrow"></i>
            </a>

            <!--Submenu-->
            <ul class="collapse in">
                @foreach ($modulos[$modulos['modulo_id']] as $sub)
                    @if(isset($sub[$sub['submodulo_id']]) and count($sub[$sub['submodulo_id']])==0)
                        <li @if(Session::get('submodulo')==$sub['submodulo_id']) class="active-link" @endif ><a href="{{route($sub['link'])}}">{{$sub['nom_submodulo']}} </a></li>
                    @else
                    <li>
                        <a @if(Session::get('submodulo')==$sub['submodulo_id']) aria-expanded="true" @endif href="#">{{$sub['nom_submodulo']}}<i class="arrow"></i></a>

                        <!--Submenu-->
                        <ul @if(Session::get('submodulo')==$sub['submodulo_id']) class="collapse in" aria-expanded="true" 
                            @else class="collapse" @endif >
                            @foreach ($sub[$sub['submodulo_id']] as $sub2)
                                <li @if(Session::get('submodulo2')==$sub2['submodulo2_id']) class="active-link" @endif ><a href="{{ $sub2['link']}}">{{ $sub2['nom_submodulo2']}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @endif 
                    

                @endforeach
            </ul>
        </li>
        @endforeach
    @endforeach

