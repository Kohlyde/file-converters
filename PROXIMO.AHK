; This script will open Firefox, wait for the page to load, then close and reopen it

; Path to Firefox executable
firefoxPath := "C:\Program Files\Mozilla Firefox\firefox.exe"
; URL to open
url := "C:\Users\coalesce\Documents\GitHub\file-converters\NEW.HTML"

; Function to open Firefox
OpenFirefox() {
    global firefoxPath, url
    Run, %firefoxPath% %url%
}

; Function to close Firefox
CloseFirefox() {
    Process, Close, firefox.exe
}

; Main script execution
Loop {
    ; Open Firefox with the desired page
    OpenFirefox()
    ; Wait for the page to fully load (adjust the time as necessary)
    Sleep, 5000
    ; Close Firefox
    CloseFirefox()
    ; Wait a bit before reopening
    Sleep, 2000
}

; You can use the following hotkey to stop the loop (for example, pressing F12)
F12::ExitApp


; AutoHotkey script to automate proxy switching and browser control

; Set the proxy list
proxies := [
    "129.226.193.16:3128",
     "189.240.60.168:9090", 
     "188.166.197.129:3128", 
     "193.202.9.23:8085", 
     "45.119.133.6:3128", 
     "129.226.193.16:3128",
    "189.240.60.168:9090",
    "188.166.197.129:3128",
    "193.202.9.23:8085",
    "45.119.133.6:3128",
    "35.185.196.38:3128",
    "15.204.161.192:18080",
    "164.52.206.180:80",
    "148.72.140.24:30127",
    "162.205.138.210:3128",
    "171.241.193.60:10006",
    "43.134.68.153:3128",
    "35.185.196.38:3128",
    "181.188.27.162:8080"
]

; Randomly select a proxy
Random, randomIndex, 1, % proxies.MaxIndex()
randomProxy := proxies[randomIndex]

; Set the proxy in the system (assuming Windows)
Run, cmd.exe /c reg add "HKCU\Software\Microsoft\Windows\CurrentVersion\Internet Settings" /v ProxyServer /t REG_SZ /d %randomProxy% /f
Run, cmd.exe /c reg add "HKCU\Software\Microsoft\Windows\CurrentVersion\Internet Settings" /v ProxyEnable /t REG_DWORD /d 1 /f

; Launch the browser (Firefox in this example)
Run, "C:\Program Files\Mozilla Firefox\firefox.exe"

; Wait for the browser to start
Sleep, 5000

; Open the desired URL
Send, ^l
Sleep, 500
Send, https://yourwebsite.com{Enter}

; Wait for the page to load
Sleep, 10000

; Close the browser
Send, !{F4} ; Alt + F4 to close the browser

; Clear the proxy settings (Optional)
Run, cmd.exe /c reg add "HKCU\Software\Microsoft\Windows\CurrentVersion\Internet Settings" /v ProxyEnable /t REG_DWORD /d 0 /f
