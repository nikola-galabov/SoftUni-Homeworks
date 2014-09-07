function findYoungestPerson(persons) {
    var result = {};
    var minAge = Number.MAX_VALUE;
    for (var i in persons) {
        if (persons[i]['age']<minAge) {
            result = persons[i];
            minAge = persons[i]['age'];
        }
    }

    console.log('The youngest person is '+result.firstname+' '+result.lastname);
}

findYoungestPerson([
  { firstname : 'George', lastname: 'Kolev', age: 32}, 
  { firstname : 'Bay', lastname: 'Ivan', age: 81},
  { firstname : 'Baba', lastname: 'Ginka', age: 40}]
);
