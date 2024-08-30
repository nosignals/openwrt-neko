<h1 align="center">
  <img src="https://raw.githubusercontent.com/nosignals/neko/main/img/neko.png" alt="neko" width="500">
</h1>

<div align="center">
 <a target="_blank" href="https://github.com/nosignals/neko/releases"><img src="https://img.shields.io/github/downloads/nosignals/neko/total?label=Total%20Download&labelColor=blue&style=for-the-badge"></a>
 <a target="_blank" href="https://dbai.team/discord"><img src="https://img.shields.io/discord/1127928183824597032?style=for-the-badge&logo=discord&label=%20"></a>
</div>


<p align="center">
  XRAY/V2ray, Shadowsocks, ShadowsocksR, etc.</br>
  Mihomo based Proxy
</p>

Features
---
- your Own Custom Theme based Bootstrap ` nekoclash/assets/theme `
- Configs, Proxy, and Rules can edit on webui
- xray/v2ray config converter

Packages list
---
| Packages | Version | Arch | Information |
|---|---|---|---|
| [luci-app-neko](https://github.com/nosignals/openwrt-neko/tree/main/luci-app-neko) | ` 1.2.1-beta ` | <div align="center"> [all-generic](https://github.com/nosignals/openwrt-neko/releases/download/luci-app-neko_1.2.1-beta/luci-app-neko_1.2.1-beta_all.ipk) </div> | Include `geosite` and `geoip` files |
| [mihomo](https://github.com/nosignals/openwrt-neko/tree/main/mihomo) | ` 1.18.7-1 ` | <div align="center"> [x86](https://github.com/nosignals/openwrt-neko/releases/download/mihomo_1.18.7/mihomo_1.18.7-1_x86_64.ipk)</br>[aarch64-generic](https://github.com/nosignals/openwrt-neko/releases/download/mihomo_1.18.7/mihomo_1.18.7-1_aarch64_generic.ipk)</br>[arm_cortex-a7_neon](https://github.com/nosignals/openwrt-neko/releases/download/mihomo_1.18.7/mihomo_1.18.7-1_arm_cortex-a7_neon-vfpv4.ipk) </div> | Latest stable version on [MetaCubeXD](https://github.com/MetaCubeX/mihomo/) |
| ? | ? | ? | ? |

Compiling
---
#### 1. Add feeds
```bash
echo "src-git neko https://github.com/nosignals/openwrt-neko.git;main" >> "feeds.conf.default"
```
#### 2. Update & Install feeds
```bash
./scripts/feeds update -a
./scripts/feeds install -a
```
#### 3. Make Packages
```bash
make package/luci-app-neko/compile
```

About
---
nosignal is gone

Credit
---
- nosignals

Screenshoot
---
<details><summary>Home</summary>
 <p>
  <img src="https://raw.githubusercontent.com/nosignals/neko/main/img/home.png" alt="home">
 </p>
</details>

<details><summary>Dasboard</summary>
 <p>
  <img src="https://raw.githubusercontent.com/nosignals/neko/main/img/dashboard.png" alt="dash">
 </p>
</details>

<details><summary>Config - Home</summary>
  <img src="https://raw.githubusercontent.com/nosignals/neko/main/img/config.png" alt="cfg">
</details>
<details><summary>Config - Proxy</summary>
  <img src="https://raw.githubusercontent.com/nosignals/neko/main/img/config-proxy.png" alt="proxy">
</details>
<details><summary>Config - Rules</summary>
  <img src="https://raw.githubusercontent.com/nosignals/neko/main/img/config-rules.png" alt="rules">
</details>
<details><summary>Config - Converter</summary>
  <img src="https://raw.githubusercontent.com/nosignals/neko/main/img/config-converter.png" alt="conv">
</details>

<details><summary>Settings</summary>
  <img src="https://raw.githubusercontent.com/nosignals/neko/main/img/setting.png" alt="setting">
</details>
