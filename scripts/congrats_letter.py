import pyautogui

pyautogui.PAUSE = 5

while True:
    # Select applicant ID.
    pyautogui.click(1170, 260, clicks=2)

    # Copy to clipboard.
    pyautogui.hotkey('ctrl', 'c')

    # Click "Preview letter"
    pyautogui.click(2345, 343)

    # Paste in applicant ID.
    pyautogui.hotkey('ctrl', 'v')

    # Click result.
    pyautogui.click(1806, 698)

    # Hit tab and enter to display the preview.
    pyautogui.press('tab')
    pyautogui.press('enter')

    # Click and drag to highlight applicant name.
    pyautogui.moveTo(627, 262)
    pyautogui.mouseDown()
    pyautogui.moveTo(20, 262)
    pyautogui.mouseUp()

    # Copy it
    pyautogui.hotkey('ctrl', 'c')

    # Right-click "Download PDF"
    pyautogui.rightClick(2470, 445)

    # Press 'k' to select "Save Link As"
    pyautogui.press('k')

    # Paste applicant name.
    pyautogui.hotkey('ctrl', 'v')

    # Hit enter.
    pyautogui.press('enter')

    # Select "Timeline" tab
    pyautogui.click(190, 311)

    # Select "New Interaction"
    pyautogui.click(903, 409)

    # Hit tab, typewrite "Phy" to select "Physical Mailing"
    pyautogui.press('tab')
    pyautogui.typewrite("Phy")

    # Hit tab, typewrite "CDE" to select "CDE Congrats Letter UG"
    pyautogui.press('tab')
    pyautogui.typewrite("CDE")

    # Hit tab 3 times, typewrite subject
    for _ in range(3):
        pyautogui.press('tab')
    pyautogui.typewrite("Sent congrats letter")

    # Hit tab 3 times, press enter to save interaction
    for _ in range(3):
        pyautogui.press('tab')
    pyautogui.press('enter')

    # Click "next"
    pyautogui.click(1217, 209)