const arr = [5, 25, 13, 8, 45, 6, 11];
const message = "5, 25,	13,	8,	45,	6,	11";

// Update header text
document.querySelector("#array").innerHTML = message;

function max(arr) {
    var max = arr[0];
    for (var i = 1; i < arr.length; i++) {
        if (arr[i] > max) {
            max = arr[i];
        }
    }
    alert("Max = " + max);
    return max;
}

function min(arr) {
    var min = arr[0];
    for (var i = 1; i < arr.length; i++) {
        if (arr[i] < min) {
            min = arr[i];
        }
    }
    alert(min);
    return min;
}

function sortArrayMin2Max(arr) {
    var temp = [];
    if (Array.isArray(arr)) {
        for (let i = 0; i < arr.length; i++) {
            for (let j = i + 1; j < arr.length; j++) {
                if (arr[i] > arr[j]) {
                    temp = arr[j];
                    arr[j] = arr[i];
                    arr[i] = temp;
                }
            }
        }
        alert(arr);
        return arr;
    }
}

function sortArrayMax2Min(arr) {
    var temp = [];
    if (Array.isArray(arr)) {
        for (let i = 0; i < arr.length; i++) {
            for (let j = i + 1; j < arr.length; j++) {
                if (arr[i] < arr[j]) {
                    temp = arr[j];
                    arr[j] = arr[i];
                    arr[i] = temp;
                }
            }
        }
        alert(arr);
        return arr;
    }
}

console.log(max);
