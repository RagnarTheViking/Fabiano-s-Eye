/**
 * Created by Mark on 9/21/2015.
 */
$(function () {
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
});

function guildRank(e) {
    switch (e) {
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
    }
}

function pluralOfClass2(t) {
    if (t == 768) t = 'Rogue';
    if (t == 775) t = 'Archer';
    if (t == 782) t = 'Wizard';
    if (t == 784) t = 'Priest';
    if (t == 797) t = 'Warrior';
    if (t == 789) t = 'Knight';
    if (t == 799) t = 'Paladin';
    if (t == 800) t = 'Assassin';
    if (t == 801) t = 'Necromancer';
    if (t == 802) t = 'Huntress';
    if (t == 803) t = 'Mystic';
    if (t == 804) t = 'Trickster';
    if (t == 805) t = 'Sorcerer';
    if (t == 806) t = 'Ninja';
    return "Huntress" == t ? "Huntresses" : t + "s"
}

function CQC(e) {
    if (e < 20) return '0/5';
    else if (e >= 20 && e < 150) return '1/5';
    else if (e >= 150 && e < 400) return '2/5';
    else if (e >= 400 && e < 800) return '3/5';
    else if (e >= 800 && e < 2000) return '4/5';
    else if (e >= 2000) return '5/5';
}