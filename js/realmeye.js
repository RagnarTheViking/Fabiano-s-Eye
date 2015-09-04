function statsTable(e, t, n, i, a) {
    function r(i, a) {
        var r = !0;
        h.push("<tr>");
        for (var l = i; a >= l; ++l)c(f[l], n[l], e[l], t[l]), r &= n[l];
        d(i, a), h.push("</tr>"), r || (o(i, a), s(i, a))
    }

    function o(i, r) {
        h.push("<tr>");
        for (var o = i; r >= o; ++o)l(n[o], e[o], t[o], a[o]);
        d(i, r), h.push("</tr>")
    }

    function s(a, r) {
        h.push("<tr>");
        for (var o = a; r >= o; ++o)u(f[o], n[o], e[o], t[o], i[o]);
        d(a, r), h.push("</tr>")
    }

    function c(e, t, n, i) {
        h.push("<td"), t && h.push(' class="maxed"'), h.push(">"), h.push(e), h.push(": "), h.push(n), 0 !== i && (h.push("("), i > 0 && h.push("+"), h.push(i), h.push(")")), h.push("</td>")
    }

    function l(e, t, n, i) {
        var a = t - n - i;
        h.push('<td class="from-avg' + (0 > a ? " below-avg" : " above-avg") + '">'), e || (0 == a ? h.push("average") : (a > 0 && h.push("+"), h.push(a), h.push(" from avg"))), h.push("</td>")
    }

    function u(e, t, n, i, a) {
        h.push('<td class="to-max">'), t || (h.push(a - n + i), ("HP" == e || "MP" == e) && (h.push(" ("), h.push(Math.ceil((a - n + i) / 5)), h.push(")")), h.push(" to max")), h.push("</td>")
    }

    function d(e, t) {
        for (var n = 0; 3 - (t - e + 1) > n; ++n)h.push("<td></td>")
    }

    var h = ['<table class="stats-table">'], f = ["HP", "MP", "ATT", "DEF", "SPD", "VIT", "WIS", "DEX"];
    return r(0, 1), r(2, 4), r(5, 7), h.push("</table>"), h.join("")
}
function renderStats(e) {
    $("#" + e + " .player-stats").each(function () {
        var e = $(this), t = [0, 1, 2, 3, 4, 6, 7, 5], n = JSON.parse(e.attr("data-stats")), i = JSON.parse(e.attr("data-bonuses")), a = JSON.parse(e.attr("data-class")), r = JSON.parse(e.attr("data-level")), o = classInfoById[a], s = o[5], c = $.map(t, function (e) {
            return s[e]
        }), l = [!1, !1, !1, !1, !1, !1, !1, !1], u = 0, d = o[4], h = o[3], f = $.map(d, function (e, t) {
            return h[t] + e * (r - 1)
        }), f = $.map(t, function (e) {
            return f[e]
        });
        $.each(c, function (e, t) {
            var a = n[e] - i[e];
            a >= t && (n[e] = t + i[e], l[e] = !0, u += 1)
        }), e.html(u + '/8 <i class="glyphicon glyphicon-info-sign"></i>'), e.popover({
            html: !0,
            content: statsTable(n, i, l, c, f),
            trigger: "manual",
            template: '<div class="popover"><div class="arrow"></div><div class="popover-inner"><div class="popover-content"><p></p></div></div></div>'
        }), e.parent().hover(function () {
            e.popover("show")
        }, function () {
            e.popover("hide")
        })
    })
}
function alternativesTable(e) {
    var t = '<table class="alternatives-table"><thead><tr><th>Server</th><th>Price</th><th>Quantity</th><th>Time Left</th></tr></thead><tbody>';
    return $.each(e, function (e, n) {
        t += "<tr>", $.each(n, function (e, n) {
            t += "<td>", 3 == e ? 2147483647 != n ? (t += "<", t += n + 1, t += " min") : t += "new" : t += n, t += "</td>"
        }), t += "</tr>"
    }), t += "</tbody></table>"
}
function renderAlternatives(e, t) {
    $("#" + e + " .cheapest-server").each(function () {
        var e = $(this), t = JSON.parse(e.attr("data-alternatives"));
        t.length > 0 && (e.append(' <i class="glyphicon glyphicon-info-sign"></i>'), e.popover({
            html: !0,
            content: alternativesTable(t),
            trigger: "manual",
            title: "Other servers",
            placement: "left"
        }), e.parent().hover(function () {
            e.popover("show")
        }, function () {
            e.popover("hide")
        }))
    })
}
function linkForItem(e) {
    var t = items[e] || items[-1];
    return 0 != t[1] && 10 != t[1] && 26 != t[1] || 3180 == e ? "/wiki/" + t[0].toLowerCase().replace(/[\'\ ]/g, "-").replace(/[^a-z0-9-]/g, "") : null
}
function renderItems(e) {
    makeItemsIn($("#" + e)).each(function () {
        $(this).wrap(function () {
            var e = linkForItem($(this).attr("data-item"));
            return null == e ? !1 : '<a href="' + e + '" target="_blank"/>'
        })
    })
}
function makeItemsIn(e) {
    return $(".item", e).each(function () {
        makeItem($(this))
    })
}
function renderItemTable(e) {
    return ['<table class="stats-table"><tbody><tr><td>Fame Bonus:</td><td>', e[5], "%</td></tr><tr><td>Feed Power:</td><td>", e[6], "</td></tr></tbody></table>"].join("")
}
function makeItem(e) {
    var t = items[e.attr("data-item")] || items[-1], n = 10 == t[1] || 0 == t[1] || 26 == t[1] ? "" : -1 == t[2] ? " UT" : " T" + t[2];
    e.css("background-position", "-" + t[3] + "px -" + t[4] + "px").popover({
        title: t[0] + n,
        trigger: "hover",
        container: "body",
        placement: function (e, t) {
            var n = $(t).offset().top - $(window).scrollTop();
            return 110 > n ? "bottom" : "top"
        },
        html: !0,
        content: renderItemTable(t)
    })
}
function renderPets(e) {
    $("#" + e + " .pet").each(function () {
        var e = $(this), t = items[e.attr("data-item")];
        t && e.css("background-position", "-" + t[1] + "px -" + t[2] + "px").attr("title", t[0])
    })
}
function renderArticle(e, t) {
    renderItems(e), $("#" + e + " td:nth-child(" + t + ") .item").each(function () {
        var e = $(this), t = items[e.attr("data-item")] || items[-1], n = e.closest("td").next();
        n.text(t[0])
    })
}
function renderNumeric(e, t, n) {
    var i = $("#" + e + " td:nth-child(" + t + ")"), a = i.map(function () {
        for (var e = $(this); e.children().length;)e = $(e.children()[0]);
        return e
    });
    a.text(function (e, t) {
        return $(this).closest("td").data("value", t), formatNumber(t)
    }), n || i.hover(function () {
        showDiffs($(this))
    }, function () {
        hideDiffs($(this))
    })
}
function showDiffs(e) {
    var t = e.data("value");
    siblingsDo(e, 25, function (e, n) {
        if ("" != n) {
            var i = n - t, a = '<span class="diff"><span';
            0 > i ? a += ' class="diff-smaller">-' : i > 0 && (a += ' class="diff-bigger">+'), i % 1 != 0 && (i = i.toFixed(1)), a += formatNumber(Math.abs(i)), a += "</span>", this.append(a)
        }
    })
}
function hideDiffs(e) {
    siblingsDo(e, 25, function () {
        $(".diff", this).remove()
    })
}
function siblingsDo(e, t, n) {
    siblingsSelectedDo(e, t, function (e) {
        return e.prev()
    }, n), siblingsSelectedDo(e, t, function (e) {
        return e.next()
    }, n)
}
function siblingsSelectedDo(e, t, n, i) {
    for (var a = e.parent(), r = e.index(), o = 0; t > o && (a = n(a), a.length); ++o) {
        var s = a.find("td:nth-child(" + (r + 1) + ")"), c = s.data("value");
        i.call(s, o + 1, c)
    }
}
function formatNumber(e) {
    var t = /(\d+)(\d{3})/;
    for (e += ""; t.test(e);)e = e.replace(t, "$1 $2");
    return e
}
function formatTimeLeft(e, t) {
    $("#" + e + " td:nth-child(" + t + ")").text(function (e, t) {
        var n = parseInt(t);
        return 2147483647 == n ? "new" : 0 == n ? "<1 minute" : "<" + (n + 1) + " minutes"
    })
}
function makeSortable(e, t) {
    $("#" + e).tablesorter({headers: t})
}
function bookmarkPlayer(e) {
    bookmarkName(e, "players")
}
function bookmarkGuild(e) {
    bookmarkName(e, "guilds")
}
function bookmarkName(e, t) {
    if (storage) {
        var n = storage[t];
        n = n ? JSON.parse(n) : [];
        var i = $.inArray(e, n);
        -1 != i && n.splice(i, 1), n.unshift(e), n.splice(200, n.length - 200), storage[t] = JSON.stringify(n)
    }
}
function colorForRank(e) {
    var t;
    return $.each([[13, "light-blue"], [27, "blue"], [41, "red"], [55, "orange"], [69, "yellow"], [70, "white"]], function (n, i) {
        return t = i[1], e <= i[0] ? !1 : void 0
    }), t
}
function renderDonationPopover(e, t) {
    function n(e) {
        a += '<span class="timeago" title="' + t[e] + '"></span>'
    }

    var i, a, r = $("#" + e + " img"), o = r.parent().prev().text(), s = r.attr("src"), c = s.slice(0, -1 * "crown-place.png".length) + "crown.png";
    if (t.length) {
        i = "Thanks " + o + "!", a = "<span>" + o + " donated ", n(0);
        for (var l = 1; l < t.length - 1; ++l)a += ", ", n(l);
        t.length > 1 && (a += " and ", n(t.length - 1)), a += "</span>", a = $(a), $(".timeago", a).timeago()
    } else i = o + " hasn't donated yet.", a = "Click on the crown to donate", r.hover(function () {
        $(this).attr("src", c)
    }, function () {
        $(this).attr("src", s)
    });
    r.popover({html: !0, title: i, content: a, trigger: "hover"})
}

function addSearch(e, t, n) {
    var i = $("#" + e);
    if (storage) {
        var a = storage[n];
        a && (a = JSON.parse(storage[n]), i.typeahead({highlight: !0}, {
            displayKey: function (e) {
                return e
            }, source: function (e, t) {
                t(typeaheadFilter(e, a))
            }
        }).on("typeahead:selected", function (e, n) {
            window.location.pathname = t + "/" + n
        }).keypress(function (e) {
            13 == e.which && (window.location.pathname = t + "/" + $(i).val())
        }))
    }
}
function addPlayerSearch(e) {
    addSearch(e, "/player", "players")
}
function addGuildSearch(e) {
    addSearch(e, "/guild", "guilds")
}
function initializeSearch(e) {
    function t(e) {
        window.location.pathname = "/" + ("Player" == l ? "player" : "guild") + "/" + e
    }

    var n = $("#" + e), i = $(".player-guild-toggle-panel", n), a = $("input[type=text]", n), r = $("label", n), o = $(".btn-group", n), s = $(".auth-panel"), c = !0, l = "Player", u = {
        Player: [],
        Guild: []
    };
    storage && (u.Player = JSON.parse(storage.players || "[]"), u.Guild = JSON.parse(storage.guilds || "[]")), a.focus(function () {
        c = !0, n.addClass("input-append"), i.show(), o.blindLeftIn("fast"), s.animate({opacity: 0}), a.attr("placeholder", l + " search")
    }).blur(function () {
        c && (o.blindLeftOut("fast", null, function () {
            n.removeClass("input-append"), i.hide()
        }), s.animate({opacity: 1}), a.attr("placeholder", "Search"))
    }).typeahead({highlight: !0}, {
        displayKey: function (e) {
            return e
        }, source: function (e, t) {
            t(typeaheadFilter(e, u[l]))
        }
    }).on("typeahead:selected", function (e, n) {
        return t(n), !0
    }).keypress(function (e) {
        13 == e.which && (window.location.pathname = "/" + l.toLowerCase() + "/" + a.val())
    }), r.mousedown(function () {
        c = !1
    }).click(function () {
        l = $(this).text(), a.trigger("focus")
    }).button()
}
function typeaheadFilter(e, t, n) {
    n = n || 9;
    var i = [], a = filterQuery(e), r = a.toLowerCase();
    $.each(t, function (e, t) {
        var e = t.toLowerCase().indexOf(r);
        -1 != e && (i[e] ? i[e].push(t) : i[e] = [t])
    });
    var o = [a];
    return $.each(i, function (e, t) {
        t && (o.length > n || (t.sort(), $.each(t, function (e, t) {
            o.length > n || o.push(t)
        })))
    }), o
}
function filterQuery(e) {
    return e.replace(/[^a-zA-Z ]/g, "").replace(/^ +| +$/g, "").replace(/ +/g, " ")
}
function indicateSelectedItem() {
    $(window.location.hash).parent().css("border-left", "3px solid #777")
}
function makeChooserRedirector(e, t) {
    $("#" + e).change(function () {
        window.location.pathname = t + $(this).val()
    })
}
function addAnchorsInDescription(e, t) {
    var n = new RegExp("(https?:\\/\\/)?(www\\.)?(youtube\\.com|youtu\\.be|imgur\\.com|i\\.imgur\\.com|puu\\.sh|twitch\\.tv|reddit\\.com|redd\\.it|github\\.com|community\\.kabam\\.com|realmeye\\.com|bluenosersguide\\.weebly\\.com|pfiffel\\.com|hummingbird\\.me)(\\/[\\w\\/\\.\\?=&;_-]+)?" + (t ? "|" + t : ""), "gi"), i = $("#" + e);
    $(".description-line", i).each(function () {
        $(this).html($(this).html().replace(n, function (e) {
            var t = e;
            /^https?:\/\//.test(e) || (t = "http://" + e);
            var n = /realmeye\.com/.test(e) ? ' rel="nofollow"' : ' rel="nofollow external"';
            return '<a href="' + encodeURI(t) + '"' + n + ">" + e + "</a>"
        }))
    })
}
function renderMail(e) {
    $("#" + e).attr("href", $.map([109, 97, 105, 108, 116, 111, 58, 105, 110, 102, 111, 64, 114, 101, 97, 108, 109, 101, 121, 101, 46, 99, 111, 109], function (e) {
        return String.fromCharCode(e)
    }).join(""))
}
function initializeLoginButton(e) {
    $("#" + e).click(function () {
        $(this).button("loading")
    })
}
function initializeLogin(e, t) {
    var n = $("#" + e), i = $("button", n), a = !1, r = $("form", n);
    i.click(function () {
        r.trigger("submit")
    }), $("input").keypress(function (e) {
        13 == e.which && (e.preventDefault(), r.trigger("submit"))
    }), r.submit(function (e) {
        if (i.button("loading"), a)return !0;
        var n = $(":input[name=username]", r).val(), o = $(":input[name=password]", r).val(), s = $(":input[name=bindToIp]", r).is(":checked") ? "t" : "f";
        return n && o ? (callSpec(t, {username: n, password: o, bindToIp: s}).done(function (e, t, n) {
            "OK" == e ? (a = !0, r.submit()) : (i.button("reset"), $("#wrong-password .alert-danger").text("Invalid username or password!"), $("#wrong-password").removeClass("hide"))
        }).fail(function () {
            i.button("reset"), $("#wrong-password .alert-danger").text("An error occured. Please try again!"), $("#wrong-password").removeClass("hide")
        }), void e.preventDefault()) : (i.button("reset"), !1)
    })
}
function initializeLogout(e) {
    $("#" + e).click(function (e) {
        var t = window.location.pathname;
        $.ajax({type: "POST", url: "/logout"}).done(function (e) {
            var n = t.indexOf("#");
            -1 != n && (t = t.slice(0, n)), window.location.href = t
        })
    })
}
function initializeEditDescription(e, t) {
    var n = $("#" + e + " > button"), i = $("#" + e + " .modal");
    n.click(function () {
        i.modal("show")
    }), $("button", i).click(function () {
        var e = {};
        $.each(["line1", "line2", "line3"], function () {
            e[this] = $("input[name=" + this + "]", i).val()
        }), callSpecAndReload(t, e)
    })
}
function initializeClickHandlerWithAction(e, t) {
    $("#" + e).click(function () {
        callSpecAndReload(t)
    })
}
function petAbilityTable(e, t, n, i, a) {
    function r(e, t) {
        o.push("<tr><td>"), o.push(e), o.push("</td><td>"), o.push(formatNumber(t)), o.push("</td></tr>")
    }

    var o = ['<table class="stats-table pet-ability-stats-table">'];
    return r("Level:", e), r("Points:", n), e != t && (r('<abbr title="Feed power needed for Next Level">Next</abbr>:', i + " fp"), r('<abbr title="Feed power needed for Max Level(' + t + ')">Max</abbr>:', a + " fp")), o.push("</table>"), o.join("")
}
function renderPetAbilityPopover(e, t, n) {
    $("#" + e + " td:nth-child(" + t + ") .pet-ability").each(function () {
        var e = $(this), t = e.data("pet-ability");
        e.html(t[1] + ' <i class="glyphicon glyphicon-info-sign"></i>'), e.popover({
            title: t[0],
            html: !0,
            content: petAbilityTable(t[1], t[2], t[3], t[4], t[5]),
            trigger: "click"
        })
    })
}
function completeData(e) {
    var t = document.cookie.match(/session=([0-9a-zA-Z]+)/);
    return t && t[1] && (e.session = t[1]), e
}
function callSpec(e, t) {
    return $.extend(e.data, t), completeData(e.data), $.ajax(e)
}
function callSpecAndReload(e, t, n) {
    var i = window.location.href;
    callSpec(e, t).done(function (e) {
        if (!n || n(e)) {
            var t = i.indexOf("#");
            -1 != t && (i = i.slice(0, t)), window.location.href = i
        }
    })
}
function initializeHideCookieBanner(e) {
    $("#" + e + " .close").click(function () {
        document.cookie = "hideCookieBanner=true;path=/;expires=Wed, 01 Jan 2020 00:00:00 GMT", $("#" + e).hide()
    })
}
function convertColumnToLocalTime(e, t) {
    $("#" + e + " td:nth-child(" + t + ")").text(function (e, t) {
        if (!t)return "";
        var n = new Date(t);
        return [n.getFullYear(), "-", padWithZeros(n.getMonth() + 1, 2), "-", padWithZeros(n.getDate(), 2), " ", padWithZeros(n.getHours(), 2), ":", padWithZeros(n.getMinutes(), 2)].join("")
    })
}
function padWithZeros(e, t) {
    return e += "", e.length >= t ? e : new Array(t - e.length + 1).join("0") + e
}
function initializeAlertCloseButton(e, t) {
    $("#" + e).click(function () {
        document.cookie = "closedAlertVersion=" + t + ";path=/;expires=Wed, 01 Jan 2020 00:00:00 GMT"
    })
}
$.fn.blindLeftIn = function (e, t, n) {
    return this.animate({marginLeft: 0}, $.speed(e, t, n))
}, $.fn.blindLeftOut = function (e, t, n) {
    return this.animate({marginLeft: -this.outerWidth()}, $.speed(e, t, n))
}, window.storage = !1;
var fail, uid;
try {
    uid = new Date, (window.storage = window.localStorage).setItem(uid, uid), fail = storage.getItem(uid) != uid, storage.removeItem(uid), fail && (window.storage = !1)
} catch (e) {
}
window.console || (window.console = {
    log: function () {
    }
}), $.timeago.settings.allowFuture = !0, window.classInfos = [[768, "Rogue", "Rogues", [150, 100, 10, 0, 15, 15, 15, 10], [25, 5, 1, 0, 1.5, 1.5, .5, 1], [720, 252, 50, 25, 75, 75, 40, 50], [[0, "Classic", 0], [834, "Bandit", 14], [913, "Brigand", 58], [916, "Eligible Bachelor", 66], [8966, "Platinum Rogue", 71], [9031, "Slime Rogue", 47], [29808, "Jack the Ripper", 97], [8614, "Skuld Set Skin", 109]], 1], [775, "Archer", "Archers", [130, 100, 12, 0, 12, 12, 12, 10], [25, 5, 1.5, 0, 1, 1, .5, 1], [700, 252, 75, 25, 50, 50, 40, 50], [[0, "Classic", 1], [835, "Robin Hood", 15], [851, "Little Helper", 31], [855, "Cupid", 35], [904, "Slime Archer", 49], [888, "Ranger", 56], [29799, "Huntsman", 91]], 2], [782, "Wizard", "Wizards", [100, 100, 12, 0, 10, 15, 12, 12], [25, 10, 1.5, 0, 1, 1.5, .5, 1], [670, 385, 75, 25, 50, 75, 40, 60], [[0, "Classic", 2], [836, "Merlin", 16], [848, "Elder Wizard", 28], [850, "Santa", 30], [914, "Gentleman", 55], [872, "Slime Wizard", 46], [9012, "Witch", 85], [29813, "Mischievous Imp", 102], [1026, "Twilight Archmage Set Skin", 110]], 3], [784, "Priest", "Priests", [100, 100, 12, 0, 12, 12, 10, 15], [25, 10, 1, 0, 1.5, 1, .5, 1.5], [670, 385, 50, 25, 55, 55, 40, 75], [[0, "Classic", 3], [837, "Traditional", 17], [849, "Robed Priest", 29], [852, "Father Time", 32], [905, "Slime Priest", 45], [884, "Nun", 52], [29811, "Zombie Nurse", 100], [29786, "Geb Set Skin", 106]], 4], [797, "Warrior", "Warriors", [200, 100, 15, 0, 7, 10, 10, 10], [25, 5, 1.5, 0, 1, 1, 1.5, 1], [770, 252, 75, 25, 50, 50, 75, 50], [[0, "Classic", 4], [838, "Juggernaut", 18], [853, "Down Under", 33], [883, "Shoveguy", 51], [8967, "B.B. Wolf", 72], [8965, "Platinum Warrior", 70], [9032, "Slime Warrior", 48], [29790, "Skeleton Warrior", 88], [29816, "Hunchback", 94]], 5], [798, "Knight", "Knights", [200, 100, 15, 0, 7, 10, 10, 10], [25, 5, 1.5, 0, 1, 1, 1.5, 1], [770, 252, 50, 40, 50, 50, 75, 50], [[0, "Classic", 5], [839, "Knight of the Round", 19], [903, "Slime Knight", 44], [902, "Iceman", 64], [8964, "Platinum Knight", 69], [29818, "Frankenstein''s Monster", 96], [1025, "Oryx Set Skin", 105]], 6], [799, "Paladin", "Paladins", [200, 100, 12, 0, 12, 10, 10, 10], [25, 5, 1.5, 0, 1, 1, .5, 1.5], [770, 252, 50, 30, 55, 45, 40, 75], [[0, "Classic", 6], [840, "Decorated Paladin", 20], [854, "Founding Father", 34], [915, "Bashing Bride", 65], [885, "Holy Avenger", 53], [9030, "Slime Paladin", 43], [29800, "Demon Spawn", 92], [29788, "Swoll Paladin Set Skin", 108]], 7], [800, "Assassin", "Assassins", [150, 100, 12, 0, 15, 15, 15, 10], [25, 5, 1, 0, 1.5, 1.5, .5, 1.5], [720, 252, 60, 25, 75, 75, 40, 60], [[0, "Classic", 7], [841, "Stealth", 21], [912, "Agent", 50], [9029, "Slime Assassin", 42], [29770, "Puppet Master", 86], [29791, "Infected Assassin", 90], [29814, "Vampire Hunter", 103]], 8], [801, "Necromancer", "Necromancers", [100, 100, 12, 0, 10, 15, 10, 12], [25, 10, 1.5, 0, 1, 1.5, .5, 1.5], [670, 385, 60, 25, 50, 60, 30, 75], [[0, "Classic", 8], [842, "Death Mage", 22], [898, "Witch Doctor", 60], [9028, "Slime Necromancer", 41], [29810, "Tiny Avatar", 99]], 9], [802, "Huntress", "Huntresses", [130, 100, 12, 0, 12, 12, 12, 10], [25, 5, 1.5, 0, 1, 1, .5, 1], [700, 252, 75, 25, 50, 50, 40, 50], [[0, "Classic", 9], [843, "Amazonian", 23], [900, "Scarlett", 62], [901, "Artemis", 67], [8977, "Nexus no Miko", 82], [9027, "Slime Huntress", 40], [29789, "Ghost Huntress", 89], [29801, "Dark Elf Huntress", 93]], 10], [803, "Mystic", "Mystics", [100, 100, 10, 0, 12, 10, 15, 15], [25, 10, 1.5, 0, 1, 1, .5, 1.5], [670, 385, 60, 25, 60, 55, 40, 75], [[0, "Classic", 10], [844, "Seer", 24], [8968, "Lil Red", 73], [9026, "Slime Mystic", 39], [29815, "Poltergeist", 104], [29787, "Phylactery Set Skin", 107]], 11], [804, "Trickster", "Tricksters", [150, 100, 10, 0, 12, 15, 12, 12], [25, 5, 1.5, 0, 1.5, 1.5, .5, 1], [720, 252, 65, 25, 75, 75, 40, 60], [[0, "Classic", 11], [845, "Loki", 25], [917, "Deadly Vixen", 63], [8979, "Drow Trickster", 84], [8969, "King Knifeula", 74], [9014, "Slime Trickster", 38], [29771, "Jester", 87], [29817, "Vampiress", 95]], 12], [805, "Sorcerer", "Sorcerers", [100, 100, 10, 0, 12, 12, 10, 15], [25, 10, 1.5, 0, 1.5, 1, 1.5, 1.5], [670, 385, 60, 25, 60, 60, 75, 60], [[0, "Classic", 12], [846, "Warlock", 26], [899, "Sorceress", 61], [8855, "Stanley the Spring Bunny", 68], [9013, "Slime Sorcerer", 37], [8976, "Ascended Sorcerer", 81]], 13], [806, "Ninja", "Ninjas", [150, 100, 15, 0, 10, 12, 10, 12], [25, 5, 1.5, 0, 1, 1.5, .5, 1.5], [720, 252, 70, 25, 60, 70, 40, 70], [[0, "Classic", 13], [847, "Shadow", 27], [856, "Slime Ninja", 36], [29809, "Death", 98]], 14]], window.classInfoById = {};
for (var i = 0; i < classInfos.length; ++i)classInfoById[classInfos[i][0]] = classInfos[i];
$.tablesorter.addParser({
    id: "guildRank", is: function (e) {
        return !1
    }, format: function (e) {
        switch (e) {
            case"Founder":
                return 5;
            case"Leader":
                return 4;
            case"Officer":
                return 3;
            case"Member":
                return 2;
            case"Initiate":
                return 1;
            default:
                return 0
        }
    }, type: "numeric"
}), $.tablesorter.addParser({
    id: "petRarity", is: function (e) {
        return !1
    }, format: function (e) {
        switch (e) {
            case"Divine":
                return 5;
            case"Legendary":
                return 4;
            case"Rare":
                return 3;
            case"Uncommon":
                return 2;
            case"Common":
                return 1;
            default:
                return 0
        }
    }, type: "numeric"
}), $.tablesorter.addParser({
    id: "accountCreated", is: function (e) {
        return !1
    }, format: function (e, t, n) {
        return $("span", n).data("rank")
    }, type: "numeric"
}), $.tablesorter.addParser({
    id: "guildStarDistribution", is: function (e) {
        return !1
    }, format: function (e, t, n) {
        return $(".guild-star-distribution", n).data("sorter")
    }, type: "numeric"
}), $(function () {
    function e() {
        $(".table-responsive").each(function () {
            var e = !!$(".scroll-alert", this).length;
            this.scrollWidth > this.clientWidth ? e || $("table", this).before('<small style="margin-left: 4px" class="label label-default scroll-alert">Scroll the table horizontally to see all columns!</small>') : e && $(".scroll-alert", this).remove()
        })
    }

    $("span.numeric").text(function (e, t) {
        return formatNumber(t)
    }), $("span.timeago").timeago(), $("ul.dropdown-menu [data-toggle=dropdown]").on("click", function (e) {
        e.preventDefault(), e.stopPropagation(), $("ul.dropdown-menu [data-toggle=dropdown]").parent().removeClass("open"), $(this).parent().addClass("open")
    }), $(window).on("resize", e), e()
}), window.RealmEye = {
    converter: function () {
        return this.converterObject || (this.converterObject = new Showdown.converter)
    }, sanitizer: function () {
        return this.sanitizerObject || (this.sanitizerObject = new Sanitize(Sanitize.Config.RELAXED))
    }, sanitize: function (e, t) {
        var n = this.converter().makeHtml(t || e.text()), i = $("<div>" + n + "</div>"), a = this.sanitizer().clean_node(i[0]);
        e.empty().append(a)
    }, initializeEditor: function (e, t, n, i, a, r) {
        function o() {
            n.is(":checked") ? (i.addClass("markdown"), RealmEye.sanitize(i, e.val())) : (i.removeClass("markdown"), i.text(e.val()))
        }

        e.data("ajaxSpec") !== a && (e.data("ajaxSpec", a), e.off(), t.off(), n.off(), a.data.body && e.val(a.data.body), n.prop("checked", a.data.markdown), n.change(o), e.on("input propertychange", o), t.click(function () {
            t.attr("disabled", "disabled").addClass("disabled").off();
            var i = {body: e.val(), markdown: n.is(":checked") ? "t" : "f"};
            r && r(i), callSpecAndReload(a, i)
        }), o())
    }
};