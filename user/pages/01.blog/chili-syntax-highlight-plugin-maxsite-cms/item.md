---
title: "Chili - подсветка кода (плагин для MaxSite CMS)"
date: 2009-08-27 10:16
taxonomy:
    category: blog
    tag: [web]
---

Маленький плагин для [MaxSite CMS](http://max-3000.com/) - подсветка кода. Основан на [Chili 2.2](http://noteslog.com/chili/).

> **Chili** is the jQuery code highlighter plugin.
> Copyright (c) Andrea Ercolino
> Published under the MIT License, and the GPL License.
> 
> **Features**
> *   Very fast highlighting, trivial setup, fully customizable, thoroughly documented, and MIT licensed
> *   Renders identically on IE, Firefox, Mozilla, Opera, and Safari
> *   Comes bundled with recipes for C++, C#, CSS, Delphi, Java, JavaScript, LotusScript, MySQL, PHP, and XHTML
> *   Many configuration options: Static, Dynamic, Automatic, Manual, Ad-Hoc, with Metaobjects
> *   Provides fine control over which elements get highlighted by means of a jQuery selector or the mithical jQuery chainability.
> *   Fully supports javascript regular expressions, including backreferences
> *   The replacement format gives full control on what HTML is used for highlighting
> *   Provides examples which show setups and features

===

### Как использовать

Нужно заключить свой код между элементами `CODE` с параметром `lang` как у языка кода, т.е.

```html
<code lang="html">
<!-- какой-то html код -->
</code>
```

также можно использовать bb-код: `[code lang="html"]` и `[/code]`.

### Скриншот

![Chili - подсветка кода](chili_screenshot.png?lightbox)

### Лог работ
#### 27.08.09

*   Начало (alpha)

[Загрузить плагин Chili](chili-alpha.zip) (zip, 46KB)