<!DOCTYPE html>
<html>
<head>
    <title>Contact Us Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            color: #333;
        }
        h1 {
            color: #0044cc;
        }
        p {
            margin-bottom: 10px;
        }
        .contact-info, .message-content {
            margin: 20px 0;
        }
        .highlight {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Contact Us Message</h1>
    
    <p class="contact-info">
        Hello,<br>
        My name is <span class="highlight">{{ $contact->name }}</span>. 
        I am reaching out because I have a question/concern and would appreciate your assistance.<br>
        You can reach me at <span class="highlight">{{ $contact->phone }}</span> or via email at <span class="highlight">{{ $contact->email }}</span>.
    </p>
    
    <p class="contact-info">
        <span class="highlight">Concern:</span> {{ $contact->concern }}<br>
        
        @if($contact->specific_concern)
            <span class="highlight">Specific Concern:</span> {{ $contact->specific_concern }}<br>
        @endif
    </p>
    
    <p class="message-content">
        <span class="highlight">Message:</span><br>
        {{ $contact->message }}
    </p>
    
    <p>
        I would be grateful if you could address my concern as soon as possible. Thank you for your attention to this matter.
    </p>
    
    <p>
        Sincerely,<br>
        <span class="highlight">{{ $contact->name }}</span>
    </p>
</body>
</html>
