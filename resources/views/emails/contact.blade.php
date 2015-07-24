<p>
  Vous avez reçu un message du contact form de site SM-DEVIS
</p>
<p>
  Here are the details:
</p>
<ul>
  <li>Name: <strong>{{ $name }}</strong></li>
  <li>Email: <strong>{{ $email }}</strong></li>
  <li>Phone: <strong>{{ $phone }}</strong></li>
</ul>
<hr>
<p>
  @foreach ($messageLines as $messageLine)
    {{ $messageLine }}<br>
  @endforeach
</p>
<hr>