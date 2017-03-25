---
title: Contact
form:
    name: contact-form
    fields:
        -
            name: name
            label: Name
            placeholder: Name
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: Address
            type: email
            validate:
                required: true
        -
            name: object
            label: Object
            placeholder: Object
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: message
            label: Message
            placeholder: Message
            autofocus: 'on'
            autocomplete: 'on'
            type: textarea
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Submit
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to: ['{{ config.plugins.email.from }}', '{{ form.value.email }}']
                subject: '[Feedback] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: feedback-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Thank you for your feedback!'
        -
            display: thankyou
---

To contact Iris Estival-David, Please complete the following information:
Nom :
Email :
Objet :
Message :