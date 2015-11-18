function statsTable(t, e, n, i, a) {
    function r(i, a) {
        var r = !0;
        h.push("<tr>");
        for (var l = i; a >= l; ++l) c(f[l], n[l], t[l], e[l]), r &= n[l];
        d(i, a), h.push("</tr>"), r || (o(i, a), s(i, a))
    }

    function o(i, r) {
        h.push("<tr>");
        for (var o = i; r >= o; ++o) l(n[o], t[o], e[o], a[o]);
        d(i, r), h.push("</tr>")
    }

    function s(a, r) {
        h.push("<tr>");
        for (var o = a; r >= o; ++o) u(f[o], n[o], t[o], e[o], i[o]);
        d(a, r), h.push("</tr>")
    }

    function c(t, e, n, i) {
        h.push("<td"), e && h.push(' class="maxed"'), h.push(">"), h.push(t), h.push(": "), h.push(n), 0 !== i && (h.push("("), i > 0 && h.push("+"), h.push(i), h.push(")")), h.push("</td>")
    }

    function l(t, e, n, i) {
        var a = e - n - i;
        h.push('<td class="from-avg' + (0 > a ? " below-avg" : " above-avg") + '">'), t || (0 == a ? h.push("average") : (a > 0 && h.push("+"), h.push(a), h.push(" from avg"))), h.push("</td>")
    }

    function u(t, e, n, i, a) {
        h.push('<td class="to-max">'), e || (h.push(a - n + i), ("HP" == t || "MP" == t) && (h.push(" ("), h.push(Math.ceil((a - n + i) / 5)), h.push(")")), h.push(" to max")), h.push("</td>")
    }

    function d(t, e) {
        for (var n = 0; 3 - (e - t + 1) > n; ++n) h.push("<td></td>")
    }
    var h = ['<table class="stats-table">'],
        f = ["HP", "MP", "ATT", "DEF", "SPD", "VIT", "WIS", "DEX"];
    return r(0, 1), r(2, 4), r(5, 7), h.push("</table>"), h.join("")
}

function renderStats(id) {
    $("#" + id + " .player-stats").each(function() {
        var elem = $(this),
            order = [0, 1, 2, 3, 4, 6, 7, 5],
            stats = JSON.parse(elem.attr("data-stats")),
            bonus = JSON.parse(elem.attr("data-bonuses")),
            classs = JSON.parse(elem.attr("data-class")),
            level = JSON.parse(elem.attr("data-level")),
            info = classInfoById[classs],
            maxStats = info[5],
            orderedMaxStats = $.map(order, function(index) {
                return maxStats[index]
            }),
            maxedStats = [!1, !1, !1, !1, !1, !1, !1, !1],
            maxedStatsAmount = 0,
            statsIncrease = info[4],
            statsBase = info[3],
            f = $.map(statsIncrease, function(t, e) {
                return statsBase[e] + t * (level - 1)
            }),
            f = $.map(order, function(t) {
                return f[t]
            });
        $.each(orderedMaxStats, function(t, e) {
            var a = stats[t] - bonus[t];
            a >= e && (stats[t] = e + bonus[t], maxedStats[t] = !0, maxedStatsAmount += 1)
        }), elem.html(maxedStatsAmount + '/8 <i class="glyphicon glyphicon-info-sign"></i>'), elem.popover({
            html: !0,
            content: statsTable(stats, bonus, maxedStats, orderedMaxStats, f),
            trigger: "manual",
            template: '<div class="popover"><div class="arrow"></div><div class="popover-inner"><div class="popover-content"><p></p></div></div></div>'
        }), elem.parent().hover(function() {
            elem.popover("show")
        }, function() {
            elem.popover("hide")
        })
    })
}

function alternativesTable(t) {
    var e = '<table class="alternatives-table"><thead><tr><th>Server</th><th>Price</th><th>Quantity</th><th>Time Left</th></tr></thead><tbody>';
    return $.each(t, function(t, n) {
        e += "<tr>", $.each(n, function(t, n) {
            e += "<td>", 3 == t ? 2147483647 != n ? (e += "<", e += n + 1, e += " min") : e += "new" : e += n, e += "</td>"
        }), e += "</tr>"
    }), e += "</tbody></table>"
}

function renderAlternatives(t, e) {
    $("#" + t + " .cheapest-server").each(function() {
        var t = $(this),
            e = JSON.parse(t.attr("data-alternatives"));
        e.length > 0 && (t.append(' <i class="glyphicon glyphicon-info-sign"></i>'), t.popover({
            html: !0,
            content: alternativesTable(e),
            trigger: "manual",
            title: "Other servers",
            placement: "left"
        }), t.parent().hover(function() {
            t.popover("show")
        }, function() {
            t.popover("hide")
        }))
    })
}

function linkForItem(t) {
    var e = items[t] || items[-1];
    return 0 != e[1] && 10 != e[1] && 26 != e[1] || 3180 == t ? "/wiki/" + e[0].toLowerCase().replace(/[\'\ ]/g, "-").replace(/[^a-z0-9-]/g, "") : null
}

function renderItems(t) {
    makeItemsIn($("#" + t)).each(function() {
        $(this).wrap(function() {
            var t = linkForItem($(this).attr("data-item"));
            return null == t ? !1 : '<a href="' + t + '" target="_blank"/>'
        })
    })
}

function makeItemsIn(t) {
    return $(".item", t).each(function() {
        makeItem($(this))
    })
}

function renderItemTable(t) {
    return ['<table class="stats-table"><tbody><tr><td>Fame Bonus:</td><td>', t[5], "%</td></tr><tr><td>Feed Power:</td><td>", t[6], "</td></tr></tbody></table>"].join("")
}

function makeItem(t) {
    var e = items[t.attr("data-item")] || items[-1],
        n = 10 == e[1] || 0 == e[1] || 26 == e[1] ? "" : -1 == e[2] ? " UT" : " T" + e[2];
    t.css("background-position", "-" + e[3] + "px -" + e[4] + "px").popover({
        title: e[0] + n,
        trigger: "hover",
        container: "body",
        placement: function(t, e) {
            var n = $(e).offset().top - $(window).scrollTop();
            return 110 > n ? "bottom" : "top"
        },
        html: !0,
        content: renderItemTable(e)
    })
}

function renderPets(t) {
    $("#" + t + " .pet").each(function() {
        var t = $(this),
            e = items[t.attr("data-item")];
        e && t.css("background-position", "-" + e[1] + "px -" + e[2] + "px").attr("title", e[0])
    })
}

function renderArticle(t, e) {
    renderItems(t), $("#" + t + " td:nth-child(" + e + ") .item").each(function() {
        var t = $(this),
            e = items[t.attr("data-item")] || items[-1],
            n = t.closest("td").next();
        n.text(e[0])
    })
}

function renderNumeric(t, e, n) {
    var i = $("#" + t + " td:nth-child(" + e + ")"),
        a = i.map(function() {
            for (var t = $(this); t.children().length;) t = $(t.children()[0]);
            return t
        });
    a.text(function(t, e) {
        return $(this).closest("td").data("value", e), formatNumber(e)
    }), n || i.hover(function() {
        showDiffs($(this))
    }, function() {
        hideDiffs($(this))
    })
}

function showDiffs(t) {
    var e = t.data("value");
    siblingsDo(t, 25, function(t, n) {
        if ("" != n) {
            var i = n - e,
                a = '<span class="diff"><span';
            0 > i ? a += ' class="diff-smaller">-' : i > 0 && (a += ' class="diff-bigger">+'), i % 1 != 0 && (i = i.toFixed(1)), a += formatNumber(Math.abs(i)), a += "</span>", this.append(a)
        }
    })
}

function hideDiffs(t) {
    siblingsDo(t, 25, function() {
        $(".diff", this).remove()
    })
}

function siblingsDo(t, e, n) {
    siblingsSelectedDo(t, e, function(t) {
        return t.prev()
    }, n), siblingsSelectedDo(t, e, function(t) {
        return t.next()
    }, n)
}

function siblingsSelectedDo(t, e, n, i) {
    for (var a = t.parent(), r = t.index(), o = 0; e > o && (a = n(a), a.length); ++o) {
        var s = a.find("td:nth-child(" + (r + 1) + ")"),
            c = s.data("value");
        i.call(s, o + 1, c)
    }
}

function formatNumber(t) {
    var e = /(\d+)(\d{3})/;
    for (t += ""; e.test(t);) t = t.replace(e, "$1 $2");
    return t
}

function formatTimeLeft(t, e) {
    $("#" + t + " td:nth-child(" + e + ")").text(function(t, e) {
        var n = parseInt(e);
        return 2147483647 == n ? "new" : 0 == n ? "<1 minute" : "<" + (n + 1) + " minutes"
    })
}

function makeSortable(t, e) {
    $("#" + t).tablesorter({
        headers: e
    })
}

function bookmarkPlayer(t) {
    bookmarkName(t, "players")
}

function bookmarkGuild(t) {
    bookmarkName(t, "guilds")
}

function bookmarkName(t, e) {
    if (storage) {
        var n = storage[e];
        n = n ? JSON.parse(n) : [];
        var i = $.inArray(t, n); - 1 != i && n.splice(i, 1), n.unshift(t), n.splice(200, n.length - 200), storage[e] = JSON.stringify(n)
    }
}

function colorForRank(t) {
    var e;
    return $.each([
        [13, "light-blue"],
        [27, "blue"],
        [41, "red"],
        [55, "orange"],
        [69, "yellow"],
        [70, "white"]
    ], function(n, i) {
        return e = i[1], t <= i[0] ? !1 : void 0
    }), e
}

function renderDonationPopover(t, e) {
    function n(t) {
        a += '<span class="timeago" title="' + e[t] + '"></span>'
    }
    var i, a, r = $("#" + t + " img"),
        o = r.parent().prev().text(),
        s = r.attr("src"),
        c = s.slice(0, -1 * "crown-place.png".length) + "crown.png";
    if (e.length) {
        i = "Thanks " + o + "!", a = "<span>" + o + " donated ", n(0);
        for (var l = 1; l < e.length - 1; ++l) a += ", ", n(l);
        e.length > 1 && (a += " and ", n(e.length - 1)), a += "</span>", a = $(a), $(".timeago", a).timeago()
    } else i = o + " hasn't donated yet.", a = "Click on the crown to donate", r.hover(function() {
        $(this).attr("src", c)
    }, function() {
        $(this).attr("src", s)
    });
    r.popover({
        html: !0,
        title: i,
        content: a,
        trigger: "hover"
    })
}

function addSearch(t, e, n) {
    var i = $("#" + t);
    if (storage) {
        var a = storage[n];
        a && (a = JSON.parse(storage[n]), i.typeahead({
            highlight: !0
        }, {
            displayKey: function(t) {
                return t
            },
            source: function(t, e) {
                e(typeaheadFilter(t, a))
            }
        }).on("typeahead:selected", function(t, n) {
            window.location.pathname = e + "/" + n
        }).keypress(function(t) {
            13 == t.which && (window.location.pathname = e + "/" + $(i).val())
        }))
    }
}

function addPlayerSearch(t) {
    addSearch(t, "/player", "players")
}

function addGuildSearch(t) {
    addSearch(t, "/guild", "guilds")
}

function initializeSearch(t) {
    function e(t) {
        window.location.pathname = "/" + ("Player" == l ? "player" : "guild") + "/" + t
    }
    var n = $("#" + t),
        i = $(".player-guild-toggle-panel", n),
        a = $("input[type=text]", n),
        r = $("label", n),
        o = $(".btn-group", n),
        s = $(".auth-panel"),
        c = !0,
        l = "Player",
        u = {
            Player: [],
            Guild: []
        };
    storage && (u.Player = JSON.parse(storage.players || "[]"), u.Guild = JSON.parse(storage.guilds || "[]")), a.focus(function() {
        c = !0, n.addClass("input-append"), i.show(), o.blindLeftIn("fast"), s.animate({
            opacity: 0
        }), a.attr("placeholder", l + " search")
    }).blur(function() {
        c && (o.blindLeftOut("fast", null, function() {
            n.removeClass("input-append"), i.hide()
        }), s.animate({
            opacity: 1
        }), a.attr("placeholder", "Search"))
    }).typeahead({
        highlight: !0
    }, {
        displayKey: function(t) {
            return t
        },
        source: function(t, e) {
            e(typeaheadFilter(t, u[l]))
        }
    }).on("typeahead:selected", function(t, n) {
        return e(n), !0
    }).keypress(function(t) {
        13 == t.which && (window.location.pathname = "/" + l.toLowerCase() + "/" + a.val())
    }), r.mousedown(function() {
        c = !1
    }).click(function() {
        l = $(this).text(), a.trigger("focus")
    }).button()
}

function typeaheadFilter(t, e, n) {
    n = n || 9;
    var i = [],
        a = filterQuery(t),
        r = a.toLowerCase();
    $.each(e, function(t, e) {
        var t = e.toLowerCase().indexOf(r); - 1 != t && (i[t] ? i[t].push(e) : i[t] = [e])
    });
    var o = [a];
    return $.each(i, function(t, e) {
        e && (o.length > n || (e.sort(), $.each(e, function(t, e) {
            o.length > n || o.push(e)
        })))
    }), o
}

function filterQuery(t) {
    return t.replace(/[^a-zA-Z ]/g, "").replace(/^ +| +$/g, "").replace(/ +/g, " ")
}

function indicateSelectedItem() {
    $(window.location.hash).parent().css("border-left", "3px solid #777")
}

function makeChooserRedirector(t, e) {
    $("#" + t).change(function() {
        window.location.pathname = e + $(this).val()
    })
}

function addAnchorsInDescription(t, e) {
    var n = new RegExp("(https?:\\/\\/)?(www\\.)?(youtube\\.com|youtu\\.be|imgur\\.com|i\\.imgur\\.com|puu\\.sh|twitch\\.tv|reddit\\.com|redd\\.it|github\\.com|community\\.kabam\\.com|realmeye\\.com|bluenosersguide\\.weebly\\.com|pfiffel\\.com|hummingbird\\.me)(\\/[\\w\\/\\.\\?=&;_-]+)?" + (e ? "|" + e : ""), "gi"),
        i = $("#" + t);
    $(".description-line", i).each(function() {
        $(this).html($(this).html().replace(n, function(t) {
            var e = t;
            /^https?:\/\//.test(t) || (e = "http://" + t);
            var n = /realmeye\.com/.test(t) ? ' rel="nofollow"' : ' rel="nofollow external"';
            return '<a href="' + encodeURI(e) + '"' + n + ">" + t + "</a>"
        }))
    })
}

function renderMail(t) {
    $("#" + t).attr("href", $.map([109, 97, 105, 108, 116, 111, 58, 105, 110, 102, 111, 64, 114, 101, 97, 108, 109, 101, 121, 101, 46, 99, 111, 109], function(t) {
        return String.fromCharCode(t)
    }).join(""))
}

function initializeLoginButton(t) {
    $("#" + t).click(function() {
        $(this).button("loading")
    })
}

function initializeLogin(t, e) {
    var n = $("#" + t),
        i = $("button", n),
        a = !1,
        r = $("form", n);
    i.click(function() {
        r.trigger("submit")
    }), $("input").keypress(function(t) {
        13 == t.which && (t.preventDefault(), r.trigger("submit"))
    }), r.submit(function(t) {
        if (i.button("loading"), a) return !0;
        var n = $(":input[name=username]", r).val(),
            o = $(":input[name=password]", r).val(),
            s = $(":input[name=bindToIp]", r).is(":checked") ? "t" : "f";
        return n && o ? (callSpec(e, {
            username: n,
            password: o,
            bindToIp: s
        }).done(function(t, e, n) {
            "OK" == t ? (a = !0, r.submit()) : (i.button("reset"), $("#wrong-password .alert-danger").text("Invalid username or password!"), $("#wrong-password").removeClass("hide"))
        }).fail(function() {
            i.button("reset"), $("#wrong-password .alert-danger").text("An error occured. Please try again!"), $("#wrong-password").removeClass("hide")
        }), void t.preventDefault()) : (i.button("reset"), !1)
    })
}

function initializeLogout(t) {
    $("#" + t).click(function(t) {
        var e = window.location.pathname;
        $.ajax({
            type: "POST",
            url: "/logout"
        }).done(function(t) {
            var n = e.indexOf("#"); - 1 != n && (e = e.slice(0, n)), window.location.href = e
        })
    })
}

function initializeEditDescription(t, e) {
    var n = $("#" + t + " > button"),
        i = $("#" + t + " .modal");
    n.click(function() {
        i.modal("show")
    }), $("button", i).click(function() {
        var t = {};
        $.each(["line1", "line2", "line3"], function() {
            t[this] = $("input[name=" + this + "]", i).val()
        }), callSpecAndReload(e, t)
    })
}

function initializeClickHandlerWithAction(t, e) {
    $("#" + t).click(function() {
        callSpecAndReload(e)
    })
}

function petAbilityTable(t, e, n, i, a) {
    function r(t, e) {
        o.push("<tr><td>"), o.push(t), o.push("</td><td>"), o.push(formatNumber(e)), o.push("</td></tr>")
    }
    var o = ['<table class="stats-table pet-ability-stats-table">'];
    return r("Level:", t), r("Points:", n), t != e && (r('<abbr title="Feed power needed for Next Level">Next</abbr>:', i + " fp"), r('<abbr title="Feed power needed for Max Level(' + e + ')">Max</abbr>:', a + " fp")), o.push("</table>"), o.join("")
}

function renderPetAbilityPopover(t, e, n) {
    $("#" + t + " td:nth-child(" + e + ") .pet-ability").each(function() {
        var t = $(this),
            e = t.data("pet-ability");
        t.html(e[1] + ' <i class="glyphicon glyphicon-info-sign"></i>'), t.popover({
            title: e[0],
            html: !0,
            content: petAbilityTable(e[1], e[2], e[3], e[4], e[5]),
            trigger: "click"
        })
    })
}

function completeData(t) {
    var e = document.cookie.match(/session=([0-9a-zA-Z]+)/);
    return e && e[1] && (t.session = e[1]), t
}

function callSpec(t, e) {
    return $.extend(t.data, e), completeData(t.data), $.ajax(t)
}

function callSpecAndReload(t, e, n) {
    var i = window.location.href;
    callSpec(t, e).done(function(t) {
        if (!n || n(t)) {
            var e = i.indexOf("#"); - 1 != e && (i = i.slice(0, e)), window.location.href = i
        }
    })
}

function initializeCookieConsentBanner(t) {
    function e() {
        var t = new Date;
        t.setYear(t.getFullYear() + 1), document.cookie = "cookiePolicyAccepted=true;path=/;expires=" + t.toUTCString()
    }
    $("#" + t + " .btn-primary").click(function() {
        e(), $("#" + t).hide()
    }), $("a").each(function() {
        var t = $(this);
        t.attr("href") && /^\/$|^\/[^\/]|^https?:\/\/www\.realmeye\.com\//.test(t.attr("href")) && t.click(e)
    }), $("#" + t + " .btn-default").click(function() {
        window.location.href = "/privacy-policy"
    })
}

function convertColumnToLocalTime(t, e) {
    $("#" + t + " td:nth-child(" + e + ")").text(function(t, e) {
        if (!e) return "";
        var n = new Date(e);
        return [n.getFullYear(), "-", padWithZeros(n.getMonth() + 1, 2), "-", padWithZeros(n.getDate(), 2), " ", padWithZeros(n.getHours(), 2), ":", padWithZeros(n.getMinutes(), 2)].join("")
    })
}

function padWithZeros(t, e) {
    return t += "", t.length >= e ? t : new Array(e - t.length + 1).join("0") + t
}

function initializeAlertCloseButton(t, e) {
    $("#" + t).click(function() {
        document.cookie = "closedAlertVersion=" + e + ";path=/;expires=Wed, 01 Jan 2020 00:00:00 GMT"
    })
}
$.fn.blindLeftIn = function(t, e, n) {
    return this.animate({
        marginLeft: 0
    }, $.speed(t, e, n))
}, $.fn.blindLeftOut = function(t, e, n) {
    return this.animate({
        marginLeft: -this.outerWidth()
    }, $.speed(t, e, n))
}, window.storage = !1;
var fail, uid;
try {
    uid = new Date, (window.storage = window.localStorage).setItem(uid, uid), fail = storage.getItem(uid) != uid, storage.removeItem(uid), fail && (window.storage = !1)
} catch (e) {}
window.console || (window.console = {
    log: function() {}
}), $.timeago.settings.allowFuture = !0, window.classInfos = [
    [768, "Rogue", "Rogues", [150, 100, 10, 0, 15, 15, 15, 10],
        [25, 5, 1, 0, 1.5, 1.5, .5, 1],
        [720, 252, 50, 25, 75, 75, 40, 50],
        [
            [0, "Classic", 0],
            [834, "Bandit", 14],
            [913, "Brigand", 58],
            [916, "Eligible Bachelor", 66],
            [8966, "Platinum Rogue", 71],
            [9031, "Slime Rogue", 47],
            [29808, "Jack the Ripper", 97],
            [8614, "Skuld Set Skin", 109]
        ], 1
    ],
    [775, "Archer", "Archers", [130, 100, 12, 0, 12, 12, 12, 10],
        [25, 5, 1.5, 0, 1, 1, .5, 1],
        [700, 252, 75, 25, 50, 50, 40, 50],
        [
            [0, "Classic", 1],
            [835, "Robin Hood", 15],
            [851, "Little Helper", 31],
            [855, "Cupid", 35],
            [904, "Slime Archer", 49],
            [888, "Ranger", 56],
            [29799, "Huntsman", 91]
        ], 2
    ],
    [782, "Wizard", "Wizards", [100, 100, 12, 0, 10, 15, 12, 12],
        [25, 10, 1.5, 0, 1, 1.5, .5, 1],
        [670, 385, 75, 25, 50, 75, 40, 60],
        [
            [0, "Classic", 2],
            [836, "Merlin", 16],
            [848, "Elder Wizard", 28],
            [850, "Santa", 30],
            [914, "Gentleman", 55],
            [872, "Slime Wizard", 46],
            [9012, "Witch", 85],
            [29813, "Mischievous Imp", 102],
            [1026, "Twilight Archmage Set Skin", 110]
        ], 3
    ],
    [784, "Priest", "Priests", [100, 100, 12, 0, 12, 12, 10, 15],
        [25, 10, 1, 0, 1.5, 1, .5, 1.5],
        [670, 385, 50, 25, 55, 55, 40, 75],
        [
            [0, "Classic", 3],
            [837, "Traditional", 17],
            [849, "Robed Priest", 29],
            [852, "Father Time", 32],
            [905, "Slime Priest", 45],
            [884, "Nun", 52],
            [29811, "Zombie Nurse", 100],
            [29786, "Geb Set Skin", 106]
        ], 4
    ],
    [797, "Warrior", "Warriors", [200, 100, 15, 0, 7, 10, 10, 10],
        [25, 5, 1.5, 0, 1, 1, 1.5, 1],
        [770, 252, 75, 25, 50, 50, 75, 50],
        [
            [0, "Classic", 4],
            [838, "Juggernaut", 18],
            [853, "Down Under", 33],
            [883, "Shoveguy", 51],
            [8967, "B.B. Wolf", 72],
            [8965, "Platinum Warrior", 70],
            [9032, "Slime Warrior", 48],
            [29790, "Skeleton Warrior", 88],
            [29816, "Hunchback", 94]
        ], 5
    ],
    [798, "Knight", "Knights", [200, 100, 15, 0, 7, 10, 10, 10],
        [25, 5, 1.5, 0, 1, 1, 1.5, 1],
        [770, 252, 50, 40, 50, 50, 75, 50],
        [
            [0, "Classic", 5],
            [839, "Knight of the Round", 19],
            [903, "Slime Knight", 44],
            [902, "Iceman", 64],
            [8964, "Platinum Knight", 69],
            [29818, "Frankenstein''s Monster", 96],
            [1025, "Oryx Set Skin", 105]
        ], 6
    ],
    [799, "Paladin", "Paladins", [200, 100, 12, 0, 12, 10, 10, 10],
        [25, 5, 1.5, 0, 1, 1, .5, 1.5],
        [770, 252, 50, 30, 55, 45, 40, 75],
        [
            [0, "Classic", 6],
            [840, "Decorated Paladin", 20],
            [854, "Founding Father", 34],
            [915, "Bashing Bride", 65],
            [885, "Holy Avenger", 53],
            [9030, "Slime Paladin", 43],
            [29800, "Demon Spawn", 92],
            [29788, "Swoll Paladin Set Skin", 108]
        ], 7
    ],
    [800, "Assassin", "Assassins", [150, 100, 12, 0, 15, 15, 15, 10],
        [25, 5, 1, 0, 1.5, 1.5, .5, 1.5],
        [720, 252, 60, 25, 75, 75, 40, 60],
        [
            [0, "Classic", 7],
            [841, "Stealth", 21],
            [912, "Agent", 50],
            [9029, "Slime Assassin", 42],
            [29770, "Puppet Master", 86],
            [29791, "Infected Assassin", 90],
            [29814, "Vampire Hunter", 103]
        ], 8
    ],
    [801, "Necromancer", "Necromancers", [100, 100, 12, 0, 10, 15, 10, 12],
        [25, 10, 1.5, 0, 1, 1.5, .5, 1.5],
        [670, 385, 60, 25, 50, 60, 30, 75],
        [
            [0, "Classic", 8],
            [842, "Death Mage", 22],
            [898, "Witch Doctor", 60],
            [9028, "Slime Necromancer", 41],
            [29810, "Tiny Avatar", 99]
        ], 9
    ],
    [802, "Huntress", "Huntresses", [130, 100, 12, 0, 12, 12, 12, 10],
        [25, 5, 1.5, 0, 1, 1, .5, 1],
        [700, 252, 75, 25, 50, 50, 40, 50],
        [
            [0, "Classic", 9],
            [843, "Amazonian", 23],
            [900, "Scarlett", 62],
            [901, "Artemis", 67],
            [8977, "Nexus no Miko", 82],
            [9027, "Slime Huntress", 40],
            [29789, "Ghost Huntress", 89],
            [29801, "Dark Elf Huntress", 93]
        ], 10
    ],
    [803, "Mystic", "Mystics", [100, 100, 10, 0, 12, 10, 15, 15],
        [25, 10, 1.5, 0, 1, 1, .5, 1.5],
        [670, 385, 60, 25, 60, 55, 40, 75],
        [
            [0, "Classic", 10],
            [844, "Seer", 24],
            [8968, "Lil Red", 73],
            [9026, "Slime Mystic", 39],
            [29815, "Poltergeist", 104],
            [29787, "Phylactery Set Skin", 107]
        ], 11
    ],
    [804, "Trickster", "Tricksters", [150, 100, 10, 0, 12, 15, 12, 12],
        [25, 5, 1.5, 0, 1.5, 1.5, .5, 1],
        [720, 252, 65, 25, 75, 75, 40, 60],
        [
            [0, "Classic", 11],
            [845, "Loki", 25],
            [917, "Deadly Vixen", 63],
            [8979, "Drow Trickster", 84],
            [8969, "King Knifeula", 74],
            [9014, "Slime Trickster", 38],
            [29771, "Jester", 87],
            [29817, "Vampiress", 95]
        ], 12
    ],
    [805, "Sorcerer", "Sorcerers", [100, 100, 10, 0, 12, 12, 10, 15],
        [25, 10, 1.5, 0, 1.5, 1, 1.5, 1.5],
        [670, 385, 60, 25, 60, 60, 75, 60],
        [
            [0, "Classic", 12],
            [846, "Warlock", 26],
            [899, "Sorceress", 61],
            [8855, "Stanley the Spring Bunny", 68],
            [9013, "Slime Sorcerer", 37],
            [8976, "Ascended Sorcerer", 81]
        ], 13
    ],
    [806, "Ninja", "Ninjas", [150, 100, 15, 0, 10, 12, 10, 12],
        [25, 5, 1.5, 0, 1, 1.5, .5, 1.5],
        [720, 252, 70, 25, 60, 70, 40, 70],
        [
            [0, "Classic", 13],
            [847, "Shadow", 27],
            [856, "Slime Ninja", 36],
            [29809, "Death", 98]
        ], 14
    ]
], window.classInfoById = {};
for (var i = 0; i < classInfos.length; ++i) classInfoById[classInfos[i][0]] = classInfos[i];
$.tablesorter.addParser({
    id: "guildRank",
    is: function(t) {
        return !1
    },
    format: function(t) {
        switch (t) {
            case "Founder":
                return 5;
            case "Leader":
                return 4;
            case "Officer":
                return 3;
            case "Member":
                return 2;
            case "Initiate":
                return 1;
            default:
                return 0
        }
    },
    type: "numeric"
}), $.tablesorter.addParser({
    id: "petRarity",
    is: function(t) {
        return !1
    },
    format: function(t) {
        switch (t) {
            case "Divine":
                return 5;
            case "Legendary":
                return 4;
            case "Rare":
                return 3;
            case "Uncommon":
                return 2;
            case "Common":
                return 1;
            default:
                return 0
        }
    },
    type: "numeric"
}), $.tablesorter.addParser({
    id: "accountCreated",
    is: function(t) {
        return !1
    },
    format: function(t, e, n) {
        return $("span", n).data("rank")
    },
    type: "numeric"
}), $.tablesorter.addParser({
    id: "guildStarDistribution",
    is: function(t) {
        return !1
    },
    format: function(t, e, n) {
        return $(".guild-star-distribution", n).data("sorter")
    },
    type: "numeric"
}), $(function() {
    function t() {
        $(".table-responsive").each(function() {
            var t = !!$(".scroll-alert", this).length;
            this.scrollWidth > this.clientWidth ? t || $("table", this).before('<small style="margin-left: 4px" class="label label-default scroll-alert">Scroll the table horizontally to see all columns!</small>') : t && $(".scroll-alert", this).remove()
        })
    }
    $("span.numeric").text(function(t, e) {
        return formatNumber(e)
    }), $("span.timeago").timeago(), $("ul.dropdown-menu [data-toggle=dropdown]").on("click", function(t) {
        t.preventDefault(), t.stopPropagation(), $("ul.dropdown-menu [data-toggle=dropdown]").parent().removeClass("open"), $(this).parent().addClass("open")
    }), $(window).on("resize", t), t()
}), window.RealmEye = {
    converter: function() {
        return this.converterObject || (this.converterObject = new Showdown.converter)
    },
    sanitizer: function() {
        return this.sanitizerObject || (this.sanitizerObject = new Sanitize(Sanitize.Config.RELAXED))
    },
    sanitize: function(t, e) {
        var n = this.converter().makeHtml(e || t.text()),
            i = $("<div>" + n + "</div>"),
            a = this.sanitizer().clean_node(i[0]);
        t.empty().append(a)
    },
    initializeEditor: function(t, e, n, i, a, r) {
        function o() {
            n.is(":checked") ? (i.addClass("markdown"), RealmEye.sanitize(i, t.val())) : (i.removeClass("markdown"), i.text(t.val()))
        }
        t.data("ajaxSpec") !== a && (t.data("ajaxSpec", a), t.off(), e.off(), n.off(), a.data.body && t.val(a.data.body), n.prop("checked", a.data.markdown), n.change(o), t.on("input propertychange", o), e.click(function() {
            e.attr("disabled", "disabled").addClass("disabled").off();
            var i = {
                body: t.val(),
                markdown: n.is(":checked") ? "t" : "f"
            };
            r && r(i), callSpecAndReload(a, i)
        }), o())
    }
};