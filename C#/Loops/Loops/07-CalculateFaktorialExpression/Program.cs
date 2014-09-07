using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _07_CalculateFaktorialExpression
{
    class Program
    {
        static void Main(string[] args)
        {
            double n = double.Parse(Console.ReadLine());
            double k = double.Parse(Console.ReadLine());
            double nFact = 2;
            double kFact = 1;
            double nWithoutKFact = 1;
            for (int i = 3; i <= n; i++)
            {
                nFact *= i;
               
            }
            for (int j = 2; j <= k; j++)
            {
                kFact*=j;    
            }
            for (int i = 2; i <= n-k; i++)
            {
                nWithoutKFact *= i;
            }
            Console.WriteLine(nFact/(kFact*nWithoutKFact));
        }
    }
}
