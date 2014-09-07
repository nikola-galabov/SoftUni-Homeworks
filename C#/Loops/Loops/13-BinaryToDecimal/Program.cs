using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _13_BinaryToDecimal
{
    class Program
    {
        static void Main(string[] args)
        {
            string input = Console.ReadLine();
            long dec = 0;
            for (int i = 0; i < input.Length; i++)
            {
                if (input[i]=='1')
                {
                    dec += (long)Math.Pow(2, input.Length - 1 - i);  
                }
            }
            Console.WriteLine(dec);
        }
    }
}
