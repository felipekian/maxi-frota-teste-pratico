<h1>Olá, {{ $user->name }}! </h1>


<a href="{{ route('site.user.validar.email', $user->email_hash_md5) }}">clique aqui para validar seu email</a>


<hr>


<p>{{ route('site.user.validar.email', $user->email_hash_md5) }}</p>
