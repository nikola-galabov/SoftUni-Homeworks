function convertKWtoHP(value) {
    const KW_TO_HP = 0.746;
    return (value / KW_TO_HP).toFixed(2);
}
console.log(convertKWtoHP(75));