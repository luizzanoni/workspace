// See https://aka.ms/new-console-template for more information
// See https://aka.ms/new-console-template for more information
using System;

namespace Colecoes
{
    class Program
    {
        static void Main(string[] args)
        {
           OperacoesArray op = new OperacoesArray(); 
           int[] array = new int[5] { 6, 3, 8, 7, 9 };

            System.Console.WriteLine("Array Original");
            op.ImprimirArray(array);

            op.ordenarBubbleSort(ref array);

            System.Console.WriteLine("Array Ordenado");
            op.ImprimirArray(array);
        }
    }
}