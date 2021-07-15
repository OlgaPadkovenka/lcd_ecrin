//solution en js
//pour executer le code taper en terminale node ecrin_lcd.js

const input = '1234567890'; 

const numbers = [
    [

        '|‾‾|',
        '|  |',
        ' ‾‾ '
    ],

    [
        '   |',
        '   |',
        '    '

    ],

    [
        ' ‾‾|',
        '|‾‾ ',
        ' ‾‾ '
    ],

    [
        ' ‾‾|',
        ' ‾‾|',
        ' ‾‾ '
    ],

    [
        '|  |',
        ' ‾‾|',
        '    '
    ],

    [
        '|‾‾ ',
        ' ‾‾|',
        ' ‾‾ '
    ],

    [
        '|‾‾ ',
        '|‾‾|',
        ' ‾‾ '
    ],

    [
        ' ‾‾|',
        '   |',
        '    '
    ],

    [
        '|‾‾|',
        '|‾‾|',
        ' ‾‾ '
    ],

    [
        '|‾‾|',
        ' ‾‾|',
        ' ‾‾ '
    ]

];

const lines = Array(numbers[0].length).fill('');

for (const c of input) {
    const x = numbers[c];
    for (let i = 0; i < lines.length; i++) {
        lines[i] += ' ' + x[i]; 
    }
}

lines.forEach(line => console.log(line));
