function countSubstringOccur(value) {
    var arr=Array(2);
    arr[0] = value[0].toLowerCase();
    arr[1] = value[1].toLowerCase();
    var index = 0;
    var count = 0;

    while (index!=-1) {
        index = arr[1].indexOf(arr[0], index);
        if (index!=-1) {
            count++;
            index += 1;
        }
    }
    console.log(count);
}

countSubstringOccur(['in', 'We are living in a yellow submarine. We don\'t have anything else. Inside the submarine is very tight. So we are drinking all the day. We will move out of it in 5 days.']);
countSubstringOccur(['your', 'No one heard a single word you said. They should have seen it in your eyes. What was going around your head.']);
countSubstringOccur(['but', 'But you were living in another world tryin\' to get your message through.']);