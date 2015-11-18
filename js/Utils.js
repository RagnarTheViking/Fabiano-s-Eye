/**
 * Created by Mark on 9/21/2015.
 */
$(function() {
    $('.character-768').text('Rogue');
    $('.character-775').text('Archer');
    $('.character-782').text('Wizard');
    $('.character-784').text('Priest');
    $('.character-797').text('Warrior');
    $('.character-798').text('Knight');
    $('.character-799').text('Paladin');
    $('.character-800').text('Assassin');
    $('.character-801').text('Necromancer');
    $('.character-802').text('Huntress');
    $('.character-803').text('Mystic');
    $('.character-804').text('Trickster');
    $('.character-805').text('Sorcerer');
    $('.character-806').text('Ninja');
    if (window.location.pathname.indexOf('player3.php') != -1) {
        $('.set-star').each(function() {
            $(this).attr('class', 'star star-' + colorForRank($('.summary tbody tr:eq(3) td:eq(1)').text()))
        });
        $('.set-guild-rank').each(function() {
            $(this).text(guildRank(parseInt($(this).attr('rank'))))
        });
        $('.set-topcharacter').each(function() {
            $(this).attr('href', 'top-' + pluralOfClass2(parseInt($(this).attr('chartype'))).toLowerCase() + '.php')
        });
        $('.set-cqc').each(function() {
            $(this).text(CQC($(this).attr('max-fame')))
        });
    }
});

function guildRank(rank) {
    switch (rank) {
        case 0:
            return 'Initiate';
        case 10:
            return 'Member';
        case 20:
            return 'Officer';
        case 30:
            return 'Leader';
        case 40:
            return 'Founder';
        default:
            return 'Invisible';
    }
}

function pluralOfClass2(classtype) {
    var ret;
    switch (classtype) {
        case 768:
            ret = 'Rogue';
            break;
        case 775:
            ret = 'Archer';
            break;
        case 782:
            ret = 'Wizard';
            break;
        case 784:
            ret = 'Priest';
            break;
        case 797:
            ret = 'Warrior';
            break;
        case 789:
            ret = 'Knight';
            break;
        case 799:
            ret = 'Paladin';
            break;
        case 800:
            ret = 'Assassin';
            break;
        case 801:
            ret = 'Necromancer';
            break;
        case 802:
            ret = 'Huntress';
            break;
        case 803:
            ret = 'Mystic';
            break;
        case 804:
            ret = 'Trickster';
            break;
        case 805:
            ret = 'Sorcerer';
            break;
        case 806:
            ret = 'Ninja';
            break;
    }
    return ret == 'Huntress' ? 'Huntresses' : ret + 's';
}


/**
 * @return {string}
 */
function CQC(fame) {
    if (fame < 20) return '0/5';
    if (fame >= 20 && fame < 150) return '1/5';
    if (fame >= 150 && fame < 400) return '2/5';
    if (fame >= 400 && fame < 800) return '3/5';
    if (fame >= 800 && fame < 2000) return '4/5';
    if (fame >= 2000) return '5/5';
}