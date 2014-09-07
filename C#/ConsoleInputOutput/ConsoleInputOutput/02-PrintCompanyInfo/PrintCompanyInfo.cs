using System;

class PrintCompanyInfo
{
    static void Main()
    {
        Console.Write("Please enter the name of the organisation: ");
        string name = Console.ReadLine();
        Console.Write("Please enter the address of the organisation: ");
        string address = Console.ReadLine();
        Console.Write("Please enter the phone number of the organisation: ");
        string phone = Console.ReadLine();
        Console.Write("Please enter the fax number of the organisation: ");
        string fax = Console.ReadLine();
        Console.Write("Please enter the website of the organisation: ");
        string webSite = Console.ReadLine();
        Console.Write("Please enter the first name of the manager: ");
        string managerFirstName = Console.ReadLine();
        Console.Write("Please enter the last name of the organisation: ");
        string managerLastName = Console.ReadLine();
        Console.Write("Please enter the manager's age: ");
        string managerAge = Console.ReadLine();
        Console.Write("Please enter the phone number of the manager: ");
        string managerPhone = Console.ReadLine();
        if (fax=="")
        {
            fax = "(no fax)"; 
        }
        Console.WriteLine("{0}\nAddress:{1}\nTel.{2}\nFax:{3}\nWeb site:{4}\nManager: {5} {6} (age:{7}, tel. {8})",
            name,address,phone,fax,webSite,managerFirstName,managerLastName,managerAge,managerPhone);
    }
}

