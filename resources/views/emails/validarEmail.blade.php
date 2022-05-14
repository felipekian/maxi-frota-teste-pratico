<h1>Hi, {{ $user->name }}! </h1>


<a href="{{ route('site.user.validar.email', $user->email_hash_md5) }}">click here to validate your email</a>


<hr>


<p>{{ route('site.user.validar.email', $user->email_hash_md5) }}</p>
