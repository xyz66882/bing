# 🚀 Bing每日壁纸API服务

## 🌟 简介

Bing首页每日都会更新一张来自世界各地的精美图片。通过 **imgRun** 提供的API链接，您可以简单、快速地获取这些栩栩如生的每日壁纸。这些壁纸每日自动更新，无论是作为网站背景还是电脑桌面壁纸，都是非常不错的选择，为您的数字生活增添一份色彩。

## 🌐 项目主页

您可以直接在浏览器中输入以下地址，访问本项目主页，体验每日壁纸服务：

*   **项目主页：** [https://bing.img.run](https://bing.img.run/)

更多项目介绍和技术细节，请访问本人博客介绍页面：

*   **博客介绍：** [https://mikelin.cn/3281.html](https://mikelin.cn/3281.html)

## 💡 代码开源

开源，是一种互联网精神。本着取之于民用之于民的原则，本项目代码已在Github上完全开源，欢迎大家查阅、学习和贡献：

*   **GitHub仓库：** [https://github.com/mike126126/bing](https://github.com/mike126126/bing)

您可以将GitHub代码克隆一份到您自己的主机（服务器）上，并绑定好域名，即可部署并访问您自己的Bing每日壁纸服务。

**重要提示：**

*   **PHP直接输出图片** 的方式，图片流量会经过您的服务器，因此速度会受限于服务器的带宽和性能。
*   **建议优先选择“跳转至Bing图片直链”** 的方式使用。这种方式直接输出Bing图片的原始直链，图片访问不占用您服务器的流量，速度不受服务器影响，通常更快、更好用。
*   `bing.img.run` 服务本身已启用了又拍云CDN加速，理论上直接使用API的速度也相当快。如果您选择下载源代码并部署到自己的服务器上，那么强烈建议使用 **302跳转到Bing直链** 的方式，这样图片加载速度将与Bing官方速度保持一致。

如果您不想自己部署代码，可以直接使用 `bing.img.run` 提供的API服务，方便快捷。
## 🔗 bing体验链接：
跳转至Bing图片直链：
* https://my.bing.xo.je/302/uhd_302.php
* https://my.bing.xo.je/302/m_302.php
* https://my.bing.xo.je/302/1366x768_302.php
* https://my.bing.xo.je/302/1920x1080_302.php

跳转至Bing图片直链 （随机获取过去8天Bing历史壁纸）
* https://my.bing.xo.je/302/lishi/uhd_302.php
* https://my.bing.xo.je/302/lishi/m_302.php
* https://my.bing.xo.je/302/lishi/1366x768_302.php
* https://my.bing.xo.je/302/lishi/1920x1080_302.php


php直接输出图片：
* https://my.bing.xo.je/php/uhd.php
* https://my.bing.xo.je/php/m.php
* https://my.bing.xo.je/php/1366x768.php
* https://my.bing.xo.je/php/1920x1080.php

php直接输出图片 （随机获取过去8天Bing历史壁纸）
* https://my.bing.xo.je/php/lishi/uhd.php
* https://my.bing.xo.je/php/lishi/m.php
* https://my.bing.xo.je/php/lishi/1366x768.php
* https://my.bing.xo.je/php/lishi/1920x1080.php

## 🛠️ 使用方法

本API接口的链接可以直接作为图片URL链接来使用，方便地嵌入到您的网页或应用中。以下是两种主要的使用方式：

### 🖼️ PHP直接输出图片

这种方式会通过您的服务器代理图片输出，适用于需要服务器端处理或缓存的场景。

```html
<!-- 1080P高清壁纸 -->
<img src="https://bing.img.run/1920x1080.php" alt="Bing每日壁纸1080P高清" />

<!-- 1366x768分辨率壁纸 -->
<img src="https://bing.img.run/1366x768.php" alt="Bing每日图片" />

<!-- 手机超高清竖版壁纸 -->
<img src="https://bing.img.run/m.php" alt="Bing每日壁纸手机超高清" />

<!-- UHD超高清原图壁纸 -->
<img src="https://bing.img.run/uhd.php" alt="Bing每日壁纸UHD超高清原图" />
```

### ➡️ 跳转至Bing图片直链 (推荐)

这种方式会通过HTTP 302重定向到Bing官方的图片直链，不占用您的服务器流量，速度更快。

```html
<!-- 1080P高清壁纸直链 -->
<img src="https://bing.img.run/1920x1080_302.php" alt="Bing每日壁纸1080P高清" />

<!-- 1366x768分辨率壁纸直链 -->
<img src="https://bing.img.run/1366x768_302.php" alt="Bing每日图片" />

<!-- 手机超高清竖版壁纸直链 -->
<img src="https://bing.img.run/m_302.php" alt="Bing每日壁纸手机超高清" />

<!-- UHD超高清原图壁纸直链 -->
<img src="https://bing.img.run/uhd_302.php" alt="Bing每日壁纸UHD超高清原图" />
```

## 📄 文件说明

在需要引用图片的地方插入对应的URL即可。不同参数的URL说明如下：

*   `PHP output img` 文件夹：包含PHP直接输出图片的代码。
*   `PHP output img\Random history Bing` 文件夹：包含PHP直接输出图片，随机获取过去8天Bing历史壁纸的代码。
*   `302 output Bing img` 文件夹：包含跳转至Bing图片直链的代码。
*   `302 output Bing img\302 Random history Bing` 文件夹：包含跳转至Bing图片直链，随机获取过去8天Bing历史壁纸的代码。
*   
*   **`https://bing.img.run/1920x1080.php`**
    *   **功能：** PHP链接直接输出 `1920×1080` 分辨率的每日壁纸图片。
*   **`https://bing.img.run/1920x1080_302.php`**
    *   **功能：** 输出为 `1920×1080` 分辨率的Bing图片直链（通过302重定向）。
*   **`https://bing.img.run/1366x768.php`**
    *   **功能：** PHP链接直接输出 `1366×768` 分辨率的每日壁纸图片。
*   **`https://bing.img.run/1366x768_302.php`**
    *   **功能：** 输出为 `1366×768` 分辨率的Bing图片直链（通过302重定向）。
*   **`https://bing.img.run/m.php`**
    *   **功能：** PHP链接直接输出 `1080×1920` 分辨率的竖版（手机）每日壁纸图片。
*   **`https://bing.img.run/m_302.php`**
    *   **功能：** 输出为 `1080×1920` 分辨率的Bing图片直链（通过302重定向，手机竖版）。
*   **`https://bing.img.run/uhd.php`**
    *   **功能：** PHP链接直接输出 **UHD（超高清原图）** 分辨率的每日壁纸图片。
*   **`https://bing.img.run/uhd_302.php`**
    *   **功能：** 输出为 **UHD（超高清原图）** 分辨率的Bing图片直链（通过302重定向）。

## 🗓️ 版本更新

*   **2022年4月19日：** 初版1.0.0版本发布。

*   **2025年7月31日：** 新增UHD超高清原图支持，提供`uhd.php`和`uhd_302.php`接口。

*   `PHP output img` 文件夹：包含PHP直接输出图片的代码。
*   `PHP output img\Random history Bing` 文件夹：包含PHP直接输出图片，随机获取过去8天Bing历史壁纸的代码。
*   `302 output Bing img` 文件夹：包含跳转至Bing图片直链的代码。
*   `302 output Bing img\302 Random history Bing` 文件夹：包含跳转至Bing图片直链，随机获取过去8天Bing历史壁纸的代码。
