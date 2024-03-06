## JS run time environment.
    i) Js engine er v8 engine use kore js code execute kore. Back end server a run korte pare.
    ii) Asynchronous or callback // Non I/O blocking(sudhu request niye worker der diye dey. onno server theke response paoyar jonno bose thake na. 
        block hoye thake na) concept a kaj kore
    iii) Single thread use kore
    iv) Worker ra libuv(c programming diye create kora) library use kore kernel er thread use kore kaj kore
    v) Not best for CPU intensive task. Best for I/O intensive task
    vi) JS event loop. Single thread er event loop concept sob control korche. Event loop ekta task queue er maddhome eita maintain kore. 
        Event base architecture bola hoy. Because kaj ses hole worker ra jokhon response pay then callback function execute kora hoy ba notify kora hoy. 
        Jeta asynchronously kora hoy.
    vii) Browser er context a js code likte hoy. tai js engine er kache age theke dom, window etc er access thake. tai se sob modify korte pare.



## Asynchronous and Promise 
    i) Call back setTimeout, setInterval. calculate, display function.
    ii) Async setTimeout diye behaviour gulo dekhay
    iii) Callback pattern enroll, progress, certificate. Give callback function. Only body pass. Function parameter pass problem 
    iV) Promise declare, resolve and reject get from promise. Call promise, get then and catch. And convert enroll, progress, certificate to promise
    v) callback > promise > async-await


## Heap, Call Stack(Engine), Run time environment: How js execute in browser. At first run main function
    Call stack, web api's, Render queue >  micro task queue(Promise) > call back queue >(Evant loop),
