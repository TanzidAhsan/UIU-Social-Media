#include <bits/stdc++.h>

using namespace std;

void LCS(char *X, char *Y, int lengthx, int lengthy)
{
    int L[lengthx +1] [lengthy+1];
    for (int i=0; i<=lengthx; i++)
    {
        for (int j=0; j<=lengthy; j++)
        {
            if(i==0 || j ==0)
                L[i][j] = 0;
            else if (X[i]==Y[j])
                L[i][j] =L[i-1][j-1]+1;
            else
                L[i][j] =max(L[i][j-1],L[i-1][j]);
        }
    }
    int length_lcs=L[lengthx][lengthy];
    cout << "Length: "<< length_lcs << endl << endl ;

}

int main()
{
    char X[] = "abcdaf";
    char Y[] = "acbcf";
    int m = strlen(X);
    int n = strlen(Y);
    LCS (X,Y,m,n);
    return 0;
}
