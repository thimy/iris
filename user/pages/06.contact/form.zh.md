---
title: 联系方式
form:
    name: contact-form
    fields:
        -
            name: name
            label: 姓名
            placeholder: 姓名
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: 邮箱
            placeholder: 邮箱
            type: email
            validate:
                required: true
        -
            name: object
            label: 主题
            placeholder: 主题
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: message
            label: 信息
            placeholder: 信息
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
            message: 'Thanks for your feedback!'
        -
            display: thankyou
---

## 联系方式

请填写下列信息联系Iris Estival-David:
