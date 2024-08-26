module("luci.controller.neko", package.seeall)
function index()
entry({"admin","services","neko"}, template("neko"), _("Neko"), 13).leaf=true
end
