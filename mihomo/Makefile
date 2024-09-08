include $(TOPDIR)/rules.mk

PKG_NAME:=mihomo
PKG_RELEASE:=2
PKG_VERSION:=1.18.8

PKG_SOURCE:=$(PKG_NAME)-$(PKG_VERSION).tar.gz
PKG_SOURCE_URL:=https://codeload.github.com/MetaCubeX/mihomo/tar.gz/v$(PKG_VERSION)?
PKG_HASH:=2d4d4bac7832cea737557f7ea4fd09d12dee777ec37b6da26a1fa42c1dfdf962

PKG_LICENSE:=MIT
PKG_MAINTAINER:=nosignals

PKG_BUILD_DEPENDS:=golang/host
PKG_BUILD_PARALLEL:=1
PKG_BUILD_FLAGS:=no-mips16

GO_PKG:=github.com/metacubex/mihomo
GO_PKG_LDFLAGS_X:=$(GO_PKG)/constant.Version=v$(PKG_VERSION)
GO_PKG_TAGS:=with_gvisor

include $(INCLUDE_DIR)/package.mk
include $(TOPDIR)/feeds/packages/lang/golang/golang-package.mk

define Package/$(PKG_NAME)
  SECTION:=net
  CATEGORY:=Network
  TITLE:=Universal proxy platform.
  URL:=https://wiki.metacubex.one
  DEPENDS:=$(GO_ARCH_DEPENDS) +ca-bundle +ip-full +kmod-tun
  USERID:=mihomo=7890:mihomo=7890
endef

define Package/$(PKG_NAME)/description
 Mihomo kernel with VMess, VLESS, Shadowsocks, Trojan, Snell, TUIC, Hysteria protocol.
endef

define Package/$(PKG_NAME)/install
	$(call GoPackage/Package/Install/Bin,$(1))
endef

define Build/Prepare
	$(Build/Prepare/Default)
	$(RM) -r $(PKG_BUILD_DIR)/rules/logic_test
endef

$(eval $(call GoBinPackage,$(PKG_NAME)))
$(eval $(call BuildPackage,$(PKG_NAME)))
