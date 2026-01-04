<h1>Nouveau message de contact pour La JMJ</h1>

<p>Vous avez reçu une nouvelle demande via le formulaire de contact.</p>

<ul>
    <li><strong>Nom :</strong> {{ $data['name'] }}</li>
    <li><strong>Email :</strong> {{ $data['email'] }}</li>
</ul>

<hr>

<p><strong>Message :</strong></p>
<p>{{ nl2br(e($data['message'])) }}</p>

<hr>
<p><small>Cet e-mail a été envoyé automatiquement depuis le site de La JMJ.</small></p>