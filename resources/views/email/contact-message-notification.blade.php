<h1>A new contact message was sent!</h1>
<h3>Information about the message</h3>
<p>Sender: {{ $contact_message->sender }} | {{ $contact_message->email }}</p>
<p>Subject: {{ $contact_message->subject }}</p>
<p>Message: {{ $contact_message->body }}</p>