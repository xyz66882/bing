# 🚀 Bing每日壁纸API服务
![bing](https://socialify.git.ci/xyz66882/bing/image?font=Raleway&forks=1&issues=1&name=1&owner=1&pattern=Plus&pulls=1&stargazers=1&theme=Auto)
<p align="center">
  <!-- 创建日期 --><img alt="GitHub Created At" src="https://img.shields.io/github/created-at/xyz66882/bing?logo=github&label=%E5%88%9B%E5%BB%BA%E6%97%A5%E6%9C%9F">
  <!-- 下载量 --><a href="https://github.com/xyz66882/bing/releases"><img src="https://img.shields.io/github/downloads/xyz66882/bing/total?logo=github&label=%E4%B8%8B%E8%BD%BD%E9%87%8F"></a>
  <!-- 贡献者 --><a href="https://github.com/xyz66882/bing/graphs/contributors"><img src="https://img.shields.io/github/contributors-anon/xyz66882/bing?logo=github&label=%E8%B4%A1%E7%8C%AE%E8%80%85"></a>
  <!-- 最新版本 --><a href="https://github.com/xyz66882/bing/releases/"><img src="https://img.shields.io/github/release/xyz66882/bing?logo=github&label=%E6%9C%80%E6%96%B0%E7%89%88%E6%AC%A1"></a>
  <!-- 问题数 --><a href="https://github.com/xyz66882/bing/issues"><img src="https://img.shields.io/github/issues-raw/xyz66882/bing?logo=github&label=%E9%97%AE%E9%A2%98"></a>
  <!-- 讨论数 --><a href="https://github.com/xyz66882/bing/discussions"><img src="https://img.shields.io/github/discussions/xyz66882/bing?logo=github&label=%E8%AE%A8%E8%AE%BA"></a>
  <!-- 仓库大小 --><a href="https://github.com/xyz66882/bing"><img src="https://img.shields.io/github/repo-size/xyz66882/bing?logo=github&label=%E4%BB%93%E5%BA%93%E5%A4%A7%E5%B0%8F"></a>
</p>

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


php直接输出图片链接不提供体验链接，由于php直接输出图片，会占用服务器流量，跳转至Bing图片直链不会不占用服务器的流量，所有这里只提供跳转至Bing图片直链链接，防止被刷流量，有需求的可以自行搭建。


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

# 🚀 贡献者
<a href="https://github.com/xyz66882/bing/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=xyz66882/bing" />
</a>
<br /><br />

# ⭐️ 收藏 历史
<a href="https://www.star-history.com/#xyz66882/bing&Date">
 <picture>
   <source media="(prefers-color-scheme: dark)" srcset="https://api.star-history.com/svg?repos=xyz66882/bing&type=Date&theme=dark" />
   <source media="(prefers-color-scheme: light)" srcset="https://api.star-history.com/svg?repos=xyz66882/bing&type=Date" />
   <img alt="Star History Chart" src="https://api.star-history.com/svg?repos=xyz66882/bing&type=Date" />
 </picture>
</a>
