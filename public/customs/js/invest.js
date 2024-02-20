const selectPlan = () => {
    let plan = document.getElementById("plan").value
    let planname = 'Riot Blockchain'
    let returnrate = 1.75
    let duration = 4
    let min = 100
    switch (plan) {
        case '0':
             planname = 'Riot Blockchain'
             returnrate = 1.75
             duration = 4
             min = 100

            document.getElementById('planname').textContent = planname
            document.getElementById('planduration').textContent =  `${duration} days`
            document.getElementById('planreturn').textContent = `${returnrate}% daily`
            document.getElementById('planmin').textContent = `$${min}`

            document.getElementById("pname").value =  planname
            document.getElementById("pduration").value =  duration
            document.getElementById("preturn").value = returnrate


            
            break;
        case '1':
             planname = 'MARATHON'
             returnrate = 3
             duration = 4
             min = 500

            document.getElementById('planname').textContent = planname
            document.getElementById('planduration').textContent =  `${duration} days`
            document.getElementById('planreturn').textContent = `${returnrate}% daily`
            document.getElementById('planmin').textContent = `$${min}`

            document.getElementById("pname").value =  planname
            document.getElementById("pduration").value =  duration
            document.getElementById("preturn").value = returnrate
            break;
        case '2':
            planname = 'CANAAN (NASDAQ: CAN)'
             returnrate = 4
             duration = 5
             min = 1000

            document.getElementById('planname').textContent = planname
            document.getElementById('planduration').textContent =  `${duration} days`
            document.getElementById('planreturn').textContent = `${returnrate}% daily`
            document.getElementById('planmin').textContent = `$${min}`

            document.getElementById("pname").value =  planname
            document.getElementById("pduration").value =  duration
            document.getElementById("preturn").value = returnrate
            break;
        case '3':
            planname = 'HUT 8'
             returnrate = 5
             duration = 7
             min = 1500

            document.getElementById('planname').textContent = planname
            document.getElementById('planduration').textContent =  `${duration} days`
            document.getElementById('planreturn').textContent = `${returnrate}% daily`
            document.getElementById('planmin').textContent = `$${min}`

            document.getElementById("pname").value =  planname
            document.getElementById("pduration").value =  duration
            document.getElementById("preturn").value = returnrate
            break;
        case '4':
            planname = 'CIPHER MINING'
             returnrate = 7
             duration = 7
             min = 100

            document.getElementById('planname').textContent = planname
            document.getElementById('planduration').textContent =  `${duration} days`
            document.getElementById('planreturn').textContent = `${returnrate}% daily`
            document.getElementById('planmin').textContent = `$${min}`

            document.getElementById("pname").value =  planname
            document.getElementById("pduration").value =  duration
            document.getElementById("preturn").value = returnrate
            break;
        default:
            planname = 'Riot Blockchain'
             returnrate = 1.75
             duration = 4
             min = 100

            document.getElementById('planname').textContent = planname
            document.getElementById('planduration').textContent =  `${duration} days`
            document.getElementById('planreturn').textContent = `${returnrate}% daily`
            document.getElementById('planmin').textContent = `$${min}`

            document.getElementById("pname").value =  planname
            document.getElementById("pduration").value =  duration
            document.getElementById("preturn").value = returnrate
            break;
    }
    document.getElementById('invbtn').removeAttribute('disabled')
}

const selectAmount = (e) => {
    document.getElementById("amm").value = e
    document.getElementById("investamount").textContent = `$${e}`
    document.getElementById("pamm").value = e
}

const setAmount = () => {
    let e =  document.getElementById("amm").value
    
    if(isNaN(e)) {
        e = 100
    }
    document.getElementById("investamount").textContent = `$${e}`
    document.getElementById("pamm").value = e
}