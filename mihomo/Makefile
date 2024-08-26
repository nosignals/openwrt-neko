include $(TOPDIR)/rules.mk

PKG_NAME:=mihomo
PKG_RELEASE:=1
PKG_VERSION:=1.18.7

PKG_SOURCE:=$(PKG_NAME)-$(PKG_VERSION).tar.gz
PKG_SOURCE_URL:=https://codeload.github.com/MetaCubeX/mihomo/tar.gz/v$(PKG_VERSION)?
PKG_HASH:=e4ff0d1a8762ff3e259e4999d9808b353c7a58a1dcabe87dccc9c91bdb6814c7

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
	$(INSTALL_DIR) $(1)/etc/uci-defaults/
  
	$(CP) $(PKG_BUILD_DIR)/files/99_mihomo $(1)/etc/uci-defaults/
endef

define Build/Prepare
	$(Build/Prepare/Default)
	$(RM) -r $(PKG_BUILD_DIR)/rules/logic_test
	$(CP) $(CURDIR)/files $(PKG_BUILD_DIR)
endef

$(eval $(call GoBinPackage,$(PKG_NAME)))
$(eval $(call BuildPackage,$(PKG_NAME)))