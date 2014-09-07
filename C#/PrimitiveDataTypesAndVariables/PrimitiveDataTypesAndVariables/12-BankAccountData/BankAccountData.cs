using System;

class BankAccountData
{
    static void Main()
    {
        Console.Write("Please enter the first name: ");
        string firstName = Console.ReadLine();
        Console.Write("Please enter the midle name: ");
        string midleName = Console.ReadLine();
        Console.Write("Please enter the last name: ");
        string lastName = Console.ReadLine();
        string holderName = firstName + " " + midleName + " " + lastName;
        Console.Write("Please enter the amount: ");
        decimal amount = decimal.Parse(Console.ReadLine());
        Console.Write("Please enter the bank's name: ");
        string bankName = Console.ReadLine();
        Console.Write("Please enter the IBAN: ");
        string iBan = Console.ReadLine();
        Console.Write("Please enter the first credit card number: ");
        long firstCreditCardNumber = long.Parse(Console.ReadLine());
        Console.Write("Please enter the second credit card number: ");
        long secondCreditCardNumber = long.Parse(Console.ReadLine());
        Console.Write("Please enter the third credit card number: ");
        long thirdCreditCardNumber = long.Parse(Console.ReadLine());
        Console.Write("Bank acount of {0}:\n Amount:{1} in bank: {2},IBAN {3},\n credit cards numbers:\n {4}\n {5}\n {6} "
            , holderName, amount, bankName, iBan, firstCreditCardNumber, secondCreditCardNumber, thirdCreditCardNumber);
    }
}

