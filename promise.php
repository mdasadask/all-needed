<!-- 
1. Enroll, pregress, getCertificate (setTimeout diye bujhay)
2. Jenetu enroll ekta function expect kore, ekta callback function dile hoy.
3. But function er sudhu name dite hobe, but progress function ekta parameter expect kore.
4. Tai ekta anonymous function call kore tar moddhe parameter pass kora hoy. 
5. 
 -->


<script>
    let status = true;
    const promise = new Promise(function(resolve, reject) {
        setTimeout(function() {
            if (status) {
                resolve("success");
            } else {
                reject("fail");
            }
        }, 2000);
    });

    promise
        .then(function(res) {

        })
        .catch(function(err) {

        });



    enroll()
        .then(progress)
        .then(getCertificate)
        .then(function(res) {
            console.log(res);
        })
        .catch(function(err) {
            console.log(err);
        });
</script>