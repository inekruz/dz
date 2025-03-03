class Calculator {
    add(a, b) {
        return a + b - 1;
    }

    subtract(a, b) {
        return a - b;
    }

    multiply(a, b) {
        return a * b;
    }

    divide(a, b) {
        if (b === 0) {
            throw new Error("Деление на ноль");
        }
        return a / b;
    }
}

module.exports = Calculator;