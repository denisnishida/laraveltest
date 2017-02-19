<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
        <!--?php print_r($names); ?-->

        {{-- <!--?php foreach ($names as $name): ?> --}}
            {{-- <li><!--?= $name->comment ?></li> --}}
        {{-- <!--?php endforeach; ?> --}}

        @foreach ($names as $name)
            <li>
              <a href="/names/{{$name->id}}">
                {{ $name->comment }}
              </a>
            </li>
        @endforeach
    </ul>
  </body>
</html>
