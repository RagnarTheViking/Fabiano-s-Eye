RealmEye.initializeCreateThread = function(t, e, i, n, a) {
    var u = $("#" + t),
        l = $(".btn:first-child", u),
        m = $(".modal", u),
        c = $("input[name=participants]", m);
    e || (c.select2({
        minimumInputLength: 1,
        maximumSelectionSize: 50,
        multiple: !0,
        ajax: $.extend(i, {
            dataType: "json",
            quietMillis: 400,
            data: function(t, e) {
                return completeData({
                    term: t
                })
            },
            results: function(t, e) {
                return {
                    results: $.map(t, function(t) {
                        return {
                            id: t,
                            text: t
                        }
                    })
                }
            }
        })
    }), a && c.select2("data", $.map(a, function(t) {
        return {
            id: t,
            text: t
        }
    }))), l.click(function() {
        m.modal("show")
    }), RealmEye.initializeEditor($(":input[name=body]", m), $(".send", m), $(":input[type=checkbox]", m), $(".preview .message-text", m), n, function(t) {
        t.subject = $(":input[name=subject]", m).val(), t.participants = e ? "guild" : c.select2("val").join(","), t.minGuildRankToRead = e ? $(":input[name=minrank]", m).val() : 0
    })
};