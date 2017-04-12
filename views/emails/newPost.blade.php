Привет, {{ $user->username }}!

{{ $blueprint->post->user->username }} написал новое сообщение в дискуссии, на которую вы подписаны: {{ $blueprint->post->discussion->title }}

Чтобы увидеть новое сообщение, перейдите по ссылке:
{{ app()->url() }}/d/{{ $blueprint->post->discussion_id }}/{{ $blueprint->post->number }}

---

{{ strip_tags($blueprint->post->contentHtml) }}

---

Вы не будете больше получать оповещений об этой дискуссии, пока не просмотрите ее.
