function sukses() {
    Swal.fire({
        type: 'success',
        title: '<strong>Sukses!</strong>',
        text: 'Registrasi Berhasil!',
        timer: 1000,
        showConfirmButton: false
    }).then(function() {
        window.location.href = "confirm.php";
    })
};

function login() {
    Swal.fire({
        type: 'success',
        title: '<strong>Sukses!</strong>',
        text: 'Login Berhasil!',
        timer: 1000,
        showConfirmButton: false
    }).then(function() {
        window.location.href = "scan.php";
    })
};

function firstRand() { // min and max included
    var tot = 78 //Total Peserta
    var a = Math.floor((Math.random() * tot) + 1);
    var b = Math.floor((Math.random() * tot) + 1);
    var c = Math.floor((Math.random() * tot) + 1);
    var d = Math.floor((Math.random() * tot) + 1);
    var e = Math.floor((Math.random() * tot) + 1);
    var f = Math.floor((Math.random() * tot) + 1);
    var g = Math.floor((Math.random() * tot) + 1);
    var h = Math.floor((Math.random() * tot) + 1);
    var i = Math.floor((Math.random() * tot) + 1);
    var j = Math.floor((Math.random() * tot) + 1);
    var k = Math.floor((Math.random() * tot) + 1);
    var l = Math.floor((Math.random() * tot) + 1);
    var numbers = [a, b, c, d, e, f, g, h, i, j, k, l];

    var y = numbers[Math.floor(Math.random() * numbers.length)];

    function generateNumber(index) {
        var desired = y[index];
        var duration = 2000;

        var output = $('#output' + index); // Start ID with letter
        var started = new Date().getTime();
        animationTimer = setInterval(function() {
            // if (new Date().getTime() - started > duration) {
            //     clearInterval(animationTimer); // Stop the loop
            //     output.text(desired); // Print desired number in case it stopped at a different one due to duration expiration
            //     // generateNumber(index + 1);
            // } else {
            document.getElementById('output' + index).innerHTML = Math.floor((Math.random() * tot) + 1);
        }, 60);
    }

    generateNumber(0);


}

function stopDice() {

    clearInterval(animationTimer);
    var a = Math.floor((Math.random() * tot) + 1);
    var b = Math.floor((Math.random() * tot) + 1);
    var c = Math.floor((Math.random() * tot) + 1);
    var d = Math.floor((Math.random() * tot) + 1);
    var e = Math.floor((Math.random() * tot) + 1);
    var f = Math.floor((Math.random() * tot) + 1);
    var g = Math.floor((Math.random() * tot) + 1);
    var h = Math.floor((Math.random() * tot) + 1);
    var i = Math.floor((Math.random() * tot) + 1);
    var j = Math.floor((Math.random() * tot) + 1);
    var k = Math.floor((Math.random() * tot) + 1);
    var l = Math.floor((Math.random() * tot) + 1);
    var numbers = [a, b, c, d, e, f, g, h, i, j, k, l];
    var y = numbers[Math.floor(Math.random() * numbers.length)];

    var desired = y[index];
    var output = $('#output' + index);
    output.text(desired);

}

function cleartext() {
    document.getElementById('output0').innerHTML = "__";
}