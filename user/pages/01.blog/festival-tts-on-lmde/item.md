---
title: "Установка festival-tts в LMDE"
date: 2015-03-14 13:02
taxonomy:
    category: blog
	tag: [софт, linux, tts]
---

Устанавливаем **многоязычную систему синтеза речи** и **русский мужской голос для Festival**:

```sh
# apt-get install festival festvox-ru
```

Создаем пользовательские настройки `~/.festivalrc`:

```txt
# Использование со звуковым сервером PulseAudio
(Parameter.set 'Audio_Required_Format 'aiff)
(Parameter.set 'Audio_Method 'Audio_Command)
(Parameter.set 'Audio_Command "paplay $FILE --client-name=Festival --stream-name=Speech")
# Установка голоса по умолчанию
(set! voice_default voice_msu_ru_nsh_clunits)
```

Проверяем:

```sh
$ echo "Привет" | festival --tts
```


