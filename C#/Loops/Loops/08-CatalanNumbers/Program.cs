using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _08_CatalanNumbers
{
    class Program
    {
        static void Main(string[] args)
        {
            int n = int.Parse(Console.ReadLine());
            int n2Fact = 1;
            int nPlus1fact = 1;
            int nFact = 1;
            for (int i = 1; i <= 2*n; i++)
            {
                n2Fact *= i;
            }
            for (int i = 1; i <= n+1; i++)
            {
                nPlus1fact *= i;
            }
            for (int i = 1; i <= n; i++)
            {
                nFact *= i;
            }
            Console.WriteLine(n2Fact/(nFact*nPlus1fact));
        }
    }
}
