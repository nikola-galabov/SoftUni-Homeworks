using System;

class QuotesInString
{
    static void Main()
    {
        string firstStr = "The \"use\" of quotations causes difficulties.";
        string secondStr = @"The ""use"" of quotations causes difficulties.";
        Console.WriteLine(firstStr);
        Console.WriteLine(secondStr);
    }
}

